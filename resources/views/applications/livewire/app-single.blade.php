{{--<li class="col-span-1 flex shadow-sm rounded-md bg-white">
    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
        {{ $app->getInitials(2) }}
    </div>
    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
        <div class="flex-1 px-4 py-2 text-sm truncate">
            <a href="#" class="text-gray-900 font-medium hover:text-gray-600">{{ $app->name }}</a>
            <p class="text-gray-500">{{ $app->countMember() .' '. __('Members')}}</p>
        </div>
        <div class="flex-shrink-0 pr-2">
            <button class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Open options</span>
                <!-- Heroicon name: dots-vertical -->
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                </svg>
            </button>
        </div>
    </div>
</li>--}}

<li class="col-span-1 flex bg-white shadow-sm rounded-md py-4">
    <div class="w-24 flex justify-center">
        <span class="bg-black w-12 h-12 font-medium rounded-full flex items-center justify-center text-white @if($app->isOnline()) ring-2 ring-green-500 @elseif($app->isPaused()) ring-2 ring-yellow-500 @endif">
            {{ $app->getInitials(2) }}
        </span>
    </div>
    <div class="flex-1 flex relative">
        <div class="flex-1 px-2 truncate">
            <a href="#" class="text-gray-900 text-lg font-medium hover:text-gray-600">{{ $app->name }}</a>
            <p class="text-gray-500 text-xs">{{ $app->created_at->diffForHumans() }}</p>
            <div class="flex items-center space-x-2 pt-3 pb-2">
                <div class="flex flex-shrink-0 -space-x-1">
                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <span class="flex-shrink-0 text-xs leading-5 text-gray-300 font-medium">+8</span>
            </div>
        </div>
        <div class="flex-shrink-0 pr-2">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        @if ($app->isPaused() && !$app->isArchived())
                        <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5">
                            <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                                {{ __('Online') }}
                            </span>
                        </x-dropdown-link>
                        @endif

                        @if ($app->isOnline() && !$app->isArchived())
                        <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5">
                            <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                                {{ __('Paused') }}
                            </span>
                        </x-dropdown-link>
                        @endif

                        @if (!$app->isPinned() && !$app->isArchived())
                        <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5">
                            <span class="w-2.5 h-2.5 mr-4 bg-blue-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                                {{ __('Pinned') }}
                            </span>
                        </x-dropdown-link>
                        @endif

                        @if ($app->isPinned() && !$app->isArchived())
                        <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5">
                            <span class="w-2.5 h-2.5 mr-4 bg-blue-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                                {{ __('Unpinned') }}
                            </span>
                        </x-dropdown-link>
                        @endif

                        @if (!$app->isArchived())
                        <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5">
                            <span class="w-2.5 h-2.5 mr-4 bg-gray-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                                {{ __('Archived') }}
                            </span>
                        </x-dropdown-link>
                        @endif

                        <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5">
                            <span class="w-2.5 h-2.5 mr-4 bg-red-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                                {{ __('Delete') }}
                            </span>
                        </x-dropdown-link>
                    </div>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</li>

