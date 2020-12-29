<div class="nav relative flex items-center justify-between border-b border-gray-200 px-14 h-20">
    <!-- logo -->
    <h2 class="logo mr-6">
        Rico apps
    </h2>

    <!-- search input -->
    <div class="flex-1 flex justify-start ml-8">
        <label for="search" class="sr-only">Search</label>
        <div class="relative w-2/4">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input id="search" name="search" class="block min-w-100 w-full pl-10 pr-10 py-3 border border-transparent rounded-full leading-5 bg-white text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-600 sm:text-sm" placeholder="Search" type="search">
        </div>
    </div>

    <!-- application menu -->
    @if(request()->application)
    <nav class="flex justify-center lg:justify-end space-x-10 h-20">
        <x-nav-link href="{{ route('account.apps.show', request()->application->id) }}" :active="request()->routeIs('account.apps.show')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link href="{{ route('account.analytics.show', request()->application->id) }}" :active="request()->routeIs('account.analytics.show')">
            {{ __('Analytics') }}
        </x-nav-link>
        <x-nav-link href="{{ route('account.clients.show', request()->application->id) }}" :active="request()->routeIs('account.clients.show')">
            {{ __('Clients') }}
        </x-nav-link>
        <x-nav-link href="{{ route('account.collaborators.show', request()->application->id) }}" :active="request()->routeIs('account.collaborators.show')">
            {{ __('Collaborators') }}
        </x-nav-link>
        <x-nav-link href="{{ route('account.settings.show', request()->application->id) }}" :active="request()->routeIs('account.settings.show')">
            {{ __('Settings') }}
        </x-nav-link>
    </nav>
    @endif
</div>
