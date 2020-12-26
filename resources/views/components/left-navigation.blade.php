<!-- Sidebar component, swap this element with another sidebar if you like -->
<div class="h-0 flex-1 flex flex-col overflow-y-auto">
    <!-- User account dropdown -->
    <div class="px-3 mt-6 relative inline-block text-left">
        <!-- Dropdown menu toggle, controlling the show/hide state of dropdown menu. -->
        <div>
            <button type="button" class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                              <span class="flex w-full justify-between items-center">
                                <span class="flex min-w-0 items-center justify-between space-x-3">
                                  <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="">
                                  <span class="flex-1 min-w-0">
                                    <span class="text-gray-900 text-sm font-medium truncate">Jessy Schwarz</span>
                                    <span class="text-gray-500 text-sm truncate">@jessyschwarz</span>
                                  </span>
                                </span>
                                  <!-- Heroicon name: selector -->
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                              </span>
            </button>
        </div>
        <!--
          Dropdown panel, show/hide based on dropdown state.

          Entering: "transition ease-out duration-100"
            From: "transform opacity-0 scale-95"
            To: "transform opacity-100 scale-100"
          Leaving: "transition ease-in duration-75"
            From: "transform opacity-100 scale-100"
            To: "transform opacity-0 scale-95"
        -->
        {{--<div
            class="z-10 mx-3 origin-top absolute right-0 left-0 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
            role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <div class="py-1">
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                   role="menuitem">View profile</a>
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                   role="menuitem">Settings</a>
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                   role="menuitem">Notifications</a>
            </div>
            <div class="py-1">
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                   role="menuitem">Get desktop app</a>
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                   role="menuitem">Support</a>
            </div>
            <div class="py-1">
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                   role="menuitem">Logout</a>
            </div>
        </div>--}}
    </div>
    <!-- Navigation -->
    <nav class="px-3 mt-6">
        <div class="space-y-1">
            <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-700 hover:text-gray-900 hover:bg-gray-50" -->
            <a href="#"
               class="bg-white shadow-sm text-black mb-2 tracking-wide group flex items-center px-3 py-3 text-md font-light rounded-md">
                <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
                <!-- Heroicon name: home -->
                <svg class="text-gray-700 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                Mes applications
            </a>

            <a href="#"
               class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 mb-2 tracking-wide group flex items-center px-3 py-3 text-md font-thin rounded-md">
                <!-- Heroicon name: view-list -->
                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Membres
            </a>

            <a href="#"
               class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 mb-2 tracking-wide group flex items-center px-3 py-3 text-md font-thin rounded-md">
                <!-- Heroicon name: clock -->
                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Parametres
            </a>
        </div>
        <div class="mt-8">
            <!-- Secondary navigation -->
            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                id="teams-headline">
                Teams
            </h3>
            <div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
                <a href="#"
                   class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
                    <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">
                                      Engineering
                                    </span>
                </a>

                <a href="#"
                   class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
                    <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">
                                      Human Resources
                                    </span>
                </a>

                <a href="#"
                   class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
                    <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">
                                      Customer Success
                                    </span>
                </a>
            </div>
        </div>
    </nav>
</div>