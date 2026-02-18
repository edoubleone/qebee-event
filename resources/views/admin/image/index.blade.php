<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Image Management') }}
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

            <!-- Upload Image -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Upload Image</h3>
                    <form method="POST" action="{{ route('admin.image.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="image_title" :value="__('Title (Optional)')" />
                            <x-text-input id="image_title" name="title" type="text" class="mt-1 block w-full" />
                        </div>
                        <div>
                            <x-input-label for="image_file" :value="__('Image File')" />
                            <input id="image_file" name="file" type="file" class="mt-1 block w-full text-gray-900 dark:text-gray-100" accept="image/*" required>
                        </div>
                        <x-primary-button>{{ __('Upload Image') }}</x-primary-button>
                    </form>
                </div>
            </div>

            <!-- Manage Images -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-full">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Manage Images</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach($images as $image)
                        <div class="relative group">
                            <img src="{{ $image->file_url }}" class="h-32 w-full object-cover rounded-lg">
                            <form action="{{ route('admin.gallery.delete', $image->id) }}" method="POST" class="absolute top-2 right-2" onsubmit="return confirm('Delete this image?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white rounded-full p-1 hover:bg-red-700">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </form>
                            <p class="mt-1 text-sm text-gray-500 truncate">{{ $image->title }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
