<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-black text-2xl leading-tight mr-2">
            {{ __('Applications') }}
        </h2>

        <x-panel>
            <x-slot name="trigger">
                <button>Hello</button>
            </x-slot>

            <x-slot name="content">
                <form class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                    <div class="flex-1 h-0 overflow-y-auto">
                        <div class="flex-1 flex flex-col justify-between">
                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                <div class="space-y-6 pt-6 pb-5">
                                    <div>
                                        <label for="project_name" class="block text-sm font-medium text-gray-900">
                                            Project name
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" name="project_name" id="project_name" class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900">
                                            Team Members
                                        </h3>
                                        <div class="mt-2">
                                            <div class="flex space-x-2">
                                                <a href="#" class="rounded-full hover:opacity-75">
                                                    <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Tom Warner">
                                                </a>
                                                <a href="#" class="rounded-full hover:opacity-75">
                                                    <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sally Preston">
                                                </a>
                                                <a href="#" class="rounded-full hover:opacity-75">
                                                    <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="Dave Gusman">
                                                </a>
                                                <a href="#" class="rounded-full hover:opacity-75">
                                                    <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Tom Cook">
                                                </a>
                                                <a href="#" class="rounded-full hover:opacity-75">
                                                    <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1586297098710-0382a496c814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.5&w=256&h=256&q=80" alt="Brandon Rogers">
                                                </a>
                                                <button type="button" class="flex-shrink-0 bg-white inline-flex h-8 w-8 items-center justify-center rounded-full border-2 border-dashed border-gray-200 text-gray-400 hover:text-gray-500 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    <span class="sr-only">Add team member</span>
                                                    <!-- Heroicon name: plus -->
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4 py-4 flex justify-end">
                        <button type="button" @click="open = ! open" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button type="submit" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-black hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </form>
            </x-slot>
        </x-panel>
    </x-slot>
    <div class="h-full">
        {{-- Success is as dangerous as failure. --}}
        <livewire:application-index />
    </div>
</x-app-layout>
