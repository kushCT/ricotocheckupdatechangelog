<div wire:init="loadPinned">
    @if (count($pins) > 0)
        <div class="mb-10 flex-shrink-0">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Pinned Projects</h2>
            <ul class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2 xl:grid-cols-4 mt-3">
                @foreach($pins as $pin)
                    <li class="relative col-span-1 flex shadow-sm rounded-md">
                        <div
                            class="flex-shrink-0 flex items-center justify-center w-16 bg-black text-white text-sm font-medium rounded-l-md">
                            {{ $pin->getInitials(2) }}
                        </div>
                        <div
                            class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                            <div class="flex-1 px-4 py-2 text-sm truncate">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">
                                    {{ $pin->name }}
                                </a>
                                <p class="text-gray-500">{{ $pin->countMember() .' '. __('Members') }}</p>
                            </div>
                            <div class="flex-shrink-0 pr-2">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button id="pinned-project-options-menu-0" aria-haspopup="true"
                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                            <span class="sr-only">Open options</span>
                                            <!-- Heroicon name: dots-vertical -->
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                 fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                            </svg>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Account settings</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Support</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">License</a>
                                                <form method="POST" action="#">
                                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">
                                                        Sign out
                                                    </button>
                                                </form>
                                            </div>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
