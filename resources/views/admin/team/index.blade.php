<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Team Management') }}
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

            <!-- Add Team Member -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Add Team Member</h3>
                    <form method="POST" action="{{ route('admin.team.store') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="team_name" :value="__('Name')" />
                            <x-text-input id="team_name" name="name" type="text" class="mt-1 block w-full" required />
                        </div>
                        <div>
                            <x-input-label for="team_role" :value="__('Role')" />
                            <x-text-input id="team_role" name="role" type="text" class="mt-1 block w-full" required />
                        </div>
                        <div>
                            <x-input-label for="team_bio" :value="__('Bio')" />
                            <textarea id="team_bio" name="bio" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" rows="3"></textarea>
                        </div>
                        <div>
                            <x-input-label for="team_image" :value="__('Image')" />
                            <input id="team_image" name="image" type="file" class="mt-1 block w-full text-gray-900 dark:text-gray-100" accept="image/*">
                        </div>
                        
                        <!-- Social Links -->
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="facebook" :value="__('Facebook URL')" />
                                <x-text-input id="facebook" name="facebook" type="text" class="mt-1 block w-full" />
                            </div>
                            <div>
                                <x-input-label for="twitter" :value="__('Twitter URL')" />
                                <x-text-input id="twitter" name="twitter" type="text" class="mt-1 block w-full" />
                            </div>
                            <div>
                                <x-input-label for="linkedin" :value="__('LinkedIn URL')" />
                                <x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full" />
                            </div>
                            <div>
                                <x-input-label for="instagram" :value="__('Instagram URL')" />
                                <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" />
                            </div>
                        </div>

                        <x-primary-button>{{ __('Add Member') }}</x-primary-button>
                    </form>
                </div>
            </div>

            <!-- Manage Team Members -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-full">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Manage Team Members</h3>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Image</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Role</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach($teamMembers as $member)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($member->image_path)
                                        <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="h-10 w-10 rounded-full object-cover">
                                    @else
                                        <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-bold">
                                            {{ substr($member->name, 0, 1) }}
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $member->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">{{ $member->role }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('admin.team.delete', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
