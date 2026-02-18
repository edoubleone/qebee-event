<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Service Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Success Message -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Errors -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Create Service -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Add New Service</h3>
                    <form method="POST" action="{{ route('admin.service.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="service_title" :value="__('Title')" />
                            <x-text-input id="service_title" name="title" type="text" class="mt-1 block w-full" required />
                        </div>
                        <div>
                            <x-input-label for="service_description" :value="__('Description')" />
                            <textarea id="service_description" name="description" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" rows="4" required></textarea>
                        </div>
                        <div>
                            <x-input-label for="service_image" :value="__('Image')" />
                            <input id="service_image" name="image" type="file" class="mt-1 block w-full text-gray-900 dark:text-gray-100" accept="image/*" required>
                        </div>
                        <div>
                            <x-input-label for="service_link" :value="__('Link (Optional)')" />
                            <x-text-input id="service_link" name="link" type="text" class="mt-1 block w-full" placeholder="e.g., https://example.com/service" />
                        </div>
                        <x-primary-button>{{ __('Add Service') }}</x-primary-button>
                    </form>
                </div>
            </div>

            <!-- Manage Services -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-full">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Manage Services</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($services as $service)
                        <div class="border rounded-lg p-4 shadow-sm bg-gray-50 dark:bg-gray-700">
                            <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="h-32 w-full object-cover rounded-md mb-2">
                            <h4 class="text-md font-bold text-gray-900 dark:text-gray-100">{{ $service->title }}</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">{{ Str::limit($service->description, 50) }}</p>
                            <form action="{{ route('admin.service.delete', $service->id) }}" method="POST" onsubmit="return confirm('Delete this service?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-semibold">Delete</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
