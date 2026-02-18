<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Video Management') }}
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

            <!-- Upload Video -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Upload Video</h3>
                    <form method="POST" action="{{ route('admin.video.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="video_title" :value="__('Title (Optional)')" />
                            <x-text-input id="video_title" name="title" type="text" class="mt-1 block w-full" />
                        </div>
                        <div>
                            <x-input-label for="video_file" :value="__('Video File')" />
                            <input id="video_file" name="file" type="file" class="mt-1 block w-full text-gray-900 dark:text-gray-100" accept="video/*" required>
                        </div>
                        <x-primary-button>{{ __('Upload Video') }}</x-primary-button>
                    </form>
                </div>
            </div>

            <!-- Manage Videos -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-full">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Manage Videos</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach($videos as $video)
                        <div class="relative group">
                            <video src="{{ $video->file_url }}" class="h-32 w-full object-cover rounded-lg"></video>
                            <form action="{{ route('admin.gallery.delete', $video->id) }}" method="POST" class="absolute top-2 right-2" onsubmit="return confirm('Delete this video?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white rounded-full p-1 hover:bg-red-700">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                            </form>
                            <p class="mt-1 text-sm text-gray-500 truncate">{{ $video->title }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
