<li class="col-span-1 flex bg-white shadow-sm rounded-md py-4">
    <div class="w-24 flex justify-center">
        <span
            class="bg-black w-12 h-12 font-medium rounded-full flex items-center justify-center text-white @if($app->isOnline()) ring-2 ring-green-500 @elseif($app->isPaused()) ring-2 ring-yellow-500 @endif">
            {{ $app->getInitials(2) }}
        </span>
    </div>
    <div class="flex-1 flex relative">
        <div class="flex-1 px-2 truncate">
            <a href="{{ route('account.apps.show', ['application' => $app->id]) }}"
               class="text-gray-900 text-lg font-medium hover:text-gray-600">
                {{ $app->name }}
            </a>
            <p class="text-gray-500 text-xs">{{ $app->created_at->diffForHumans() }}</p>
            <div class="flex items-center space-x-2 pt-3 pb-2">
                <div class="flex flex-shrink-0 -space-x-1">
                    @forelse($app->appLastMembers() as $user)
                        @if ($user->hasAvatar())
                            <img class="max-w-none h-7 w-7 rounded-full ring-2 ring-white object-cover"
                                 src="{{ $user->avatar() }}" alt="avatar">
                        @else
                            <span
                                class="max-w-none h-7 w-7 rounded-full ring-2 ring-white inline-flex items-center justify-center bg-black text-white text-xs ">
                                {!! $user->initial() !!}
                            </span>
                        @endif
                    @empty
                        <button
                            class="inline-flex items-center justify-center py-2 px-3 rounded text-xs text-gray-300 font-bold tracking-normal border border-gray-200 bg-transparent {{ !$app->isArchived() ? 'hover:bg-black hover:border-black' : '' }} transition-colors"
                            disabled="{{$app->isArchived()}}">
                            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Add collaborator
                        </button>
                    @endforelse
                </div>
                <span
                    class="flex-shrink-0 text-xs leading-5 text-gray-300 font-medium">{{ ($app->countMember() - count($app->appLastMembers())) <= 0 ? '' : '+'.($app->countMember() - count($app->appLastMembers()))}}</span>
            </div>
        </div>
        <div class="flex-shrink-0 pr-2">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button type="button" id="apps-menu-{{ $app->id }}" aria-haspopup="true" aria-expanded="true"
                            class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div class="py-1 pb-0 divide" role="menu" aria-orientation="vertical"
                         aria-labelledby="apps-menu-{{ $app->id }}">
                        @if ($app->isPaused() && !$app->isArchived())
                            <x-dropdown-link href="#"
                                             class="group flex items-center px-3 text-base leading-5 font-medium"
                                             wire:click.prevent="setStatus('online')">
                                <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                {{ __('Online') }}
                            </span>
                            </x-dropdown-link>
                        @endif

                        @if ($app->isOnline() && !$app->isArchived())
                            <x-dropdown-link href="#"
                                             class="group flex items-center px-3 text-base leading-5 font-medium"
                                             wire:click.prevent="setStatus('paused')">
                                <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                {{ __('Paused') }}
                            </span>
                            </x-dropdown-link>
                        @endif

                        @if (!$app->isPinned() && !$app->isArchived())
                            <x-dropdown-link href="#"
                                             class="group flex items-center px-3 text-base leading-5 font-medium"
                                             wire:click.prevent="pinned">
                                <span class="w-2.5 h-2.5 mr-4 bg-blue-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                {{ __('Pinned') }}
                            </span>
                            </x-dropdown-link>
                        @endif

                        @if ($app->isPinned() && !$app->isArchived())
                            <x-dropdown-link href="#"
                                             class="group flex items-center px-3 text-base leading-5 font-medium"
                                             wire:click.prevent="pinned">
                                <span class="w-2.5 h-2.5 mr-4 bg-blue-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                {{ __('Unpinned') }}
                            </span>
                            </x-dropdown-link>
                        @endif

                        @if (!$app->isArchived())
                            <x-dropdown-link href="#"
                                             class="group flex items-center px-3 text-base leading-5 font-medium"
                                             wire:click.prevent="archived">
                                <span class="w-2.5 h-2.5 mr-4 bg-gray-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                {{ __('Archived') }}
                            </span>
                            </x-dropdown-link>
                        @endif

                        @if ($app->isArchived())
                            <x-dropdown-link href="#"
                                             class="group flex items-center px-3 text-base leading-5 font-medium"
                                             wire:click.prevent="archived">
                                <span class="w-2.5 h-2.5 mr-4 bg-gray-500 rounded-full" aria-hidden="true"></span>
                                <span class="truncate">
                                    {{ __('Unarchived') }}
                                </span>
                            </x-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <x-dropdown-link href="#"
                                         class="group flex items-center px-3 text-base leading-5 text-red-300 hover:text-red-500">
                            <svg class="w-4 h-4 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
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

