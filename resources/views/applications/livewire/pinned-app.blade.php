<li class="relative col-span-1 flex shadow-sm rounded-md">
    <div
        class="flex-shrink-0 flex items-center justify-center w-16 bg-black text-white text-sm font-medium rounded-l-md">
        {{ $app->getInitials(2) }}
    </div>
    <div
        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md">
        <div class="flex-1 px-4 py-2 text-sm truncate">
            <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                {{ $app->name }}
            </a>
            <p class="text-gray-500">{{ $app->countMember() .' '. __('Members') }}</p>
        </div>
        <div class="flex-shrink-0 pr-2">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button type="button" id="pinned-menu-{{ $app->id }}" aria-haspopup="true" aria-expanded="true" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="pinned-menu-{{ $app->id }}">
                        @if ($app->isPinned() && !$app->isArchived())
                            <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5 font-medium" wire:click.prevent="pinned" >
                                <span class="w-2.5 h-2.5 mr-4 bg-blue-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                {{ __('Unpinned') }}
                            </span>
                            </x-dropdown-link>
                        @endif

                        @if (!$app->isArchived())
                            <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5 font-medium" wire:click.prevent="archived">
                                <span class="w-2.5 h-2.5 mr-4 bg-gray-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                {{ __('Archived') }}
                            </span>
                            </x-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <x-dropdown-link href="#" class="group flex items-center px-3 text-base leading-5 text-red-300 hover:text-red-500">
                            <svg class="w-4 h-4 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
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
