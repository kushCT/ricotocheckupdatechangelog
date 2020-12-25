{{-- Navigation --}}
<header class="flex-shrink-0 bg-gray-50 flex h-20 px-12 justify-between">
    <nav class="flex flex-grow space-x-8">
        <a href="{{ route('account.applications.index') }}" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
           lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            {{ __('Applications') }}
        </a>
        <a href="{{ route('account.members.index') }}" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
           lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            {{ __('Members') }}
        </a>
        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
           lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            {{ __('Settings') }}
        </a>
    </nav>

    <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
        <div class="max-w-lg w-full lg:max-w-xs">
            <label for="search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: search -->
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" type="search">
            </div>
        </div>
    </div>
</header>
