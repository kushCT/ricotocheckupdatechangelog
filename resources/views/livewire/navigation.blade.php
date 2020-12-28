<nav class="flex-grow px-16 border-b border-gray-100 flex justify-between h-20">
    <div class="flex">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
            <a href="#">Logo</a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-10 sm:-my-px sm:ml-16 sm:flex">
            <x-nav-link href="{{ route('account.dashboard') }}" :active="request()->routeIs('account.dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link href="{{ route('account.apps.index') }}" :active="request()->routeIs('account.apps.index')">
                {{ __('Application') }}
            </x-nav-link>
            <x-nav-link href="{{ route('account.archives.index') }}" :active="request()->routeIs('account.archives.index')">
                {{ __('Archives') }}
            </x-nav-link>
            <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">Settings</a>
        </div>
    </div>

    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Profile dropdown -->
        <div class="ml-3 relative">
            <div>
                <button class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
            </div>
        </div>
    </div>
</nav>
