<x-app-layout>
    <main class="flex min-h-screen bg-gray-200">
        <x-app-sidebar/>

        {{-- App content --}}
        <div class="flex-grow flex flex-col">
            <x-app-navigation/>

            <div class="flex-grow flex flex-col">
                <div class="flex-grow flex flex-col p-12">
                    <x-app-breadcrumbs/>

                    <div class="flex-grow flex-none mt-10">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div>
                            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Pinned Projects</h2>
                            <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                                <li class="col-span-1 flex shadow-sm rounded-md">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
                                        GA
                                    </div>
                                    <div
                                        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                        <div class="flex-1 px-4 py-2 text-sm truncate">
                                            <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Graph
                                                API</a>
                                            <p class="text-gray-500">16 Members</p>
                                        </div>
                                        <div class="flex-shrink-0 pr-2">
                                            <button
                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="sr-only">Open options</span>
                                                <!-- Heroicon name: dots-vertical -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-span-1 flex shadow-sm rounded-md">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center w-16 bg-purple-600 text-white text-sm font-medium rounded-l-md">
                                        CD
                                    </div>
                                    <div
                                        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                        <div class="flex-1 px-4 py-2 text-sm truncate">
                                            <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Component
                                                Design</a>
                                            <p class="text-gray-500">12 Members</p>
                                        </div>
                                        <div class="flex-shrink-0 pr-2">
                                            <button
                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="sr-only">Open options</span>
                                                <!-- Heroicon name: dots-vertical -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-span-1 flex shadow-sm rounded-md">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center w-16 bg-yellow-500 text-white text-sm font-medium rounded-l-md">
                                        T
                                    </div>
                                    <div
                                        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                        <div class="flex-1 px-4 py-2 text-sm truncate">
                                            <a href="#"
                                               class="text-gray-900 font-medium hover:text-gray-600">Templates</a>
                                            <p class="text-gray-500">16 Members</p>
                                        </div>
                                        <div class="flex-shrink-0 pr-2">
                                            <button
                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="sr-only">Open options</span>
                                                <!-- Heroicon name: dots-vertical -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-span-1 flex shadow-sm rounded-md">
                                    <div
                                        class="flex-shrink-0 flex items-center justify-center w-16 bg-green-500 text-white text-sm font-medium rounded-l-md">
                                        RC
                                    </div>
                                    <div
                                        class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                                        <div class="flex-1 px-4 py-2 text-sm truncate">
                                            <a href="#" class="text-gray-900 font-medium hover:text-gray-600">React
                                                Components</a>
                                            <p class="text-gray-500">8 Members</p>
                                        </div>
                                        <div class="flex-shrink-0 pr-2">
                                            <button
                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="sr-only">Open options</span>
                                                <!-- Heroicon name: dots-vertical -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Projects table (small breakpoint and up) -->
                        <div class="hidden mt-8 sm:block">
                            <div class="align-middle inline-block min-w-full border-b border-gray-200">
                                <table class="min-w-full">
                                    <thead>
                                    <tr class="border-t border-gray-200">
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <span class="lg:pl-2">Project</span>
                                        </th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Members
                                        </th>
                                        <th class="hidden md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Last updated
                                        </th>
                                        <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-100">
                                    <tr>
                                        <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                            <div class="flex items-center space-x-3 lg:pl-2">
                                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                                     aria-hidden="true"></div>
                                                <a href="#" class="truncate hover:text-gray-600">
                      <span>
                        GraphQL API
                        <span class="text-gray-500 font-normal">in Engineering</span>
                      </span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                                            <div class="flex items-center space-x-2">
                                                <div class="flex flex-shrink-0 -space-x-1">
                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">
                                                </div>

                                                <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                                            </div>
                                        </td>
                                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                            March 17, 2020
                                        </td>
                                        <td class="pr-6">
                                            <div class="relative flex justify-end items-center">
                                                <button id="project-options-menu-0" aria-haspopup="true" type="button"
                                                        class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                                    <span class="sr-only">Open options</span>
                                                    <!-- Heroicon name: dots-vertical -->
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                    </svg>
                                                </button>
                                                <!--
                                                  Dropdown panel, show/hide based on dropdown state.

                                                  Entering: "transition ease-out duration-100"
                                                    From: "transform opacity-0 scale-95"
                                                    To: "transform opacity-100 scale-100"
                                                  Leaving: "transition ease-in duration-75"
                                                    From: "transform opacity-100 scale-100"
                                                    To: "transform opacity-0 scale-95"
                                                -->
                                                <div
                                                    class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg z-10 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="project-options-menu-0">
                                                    <div class="py-1" role="none">
                                                        <a href="#"
                                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                           role="menuitem">
                                                            <!-- Heroicon name: pencil-alt -->
                                                            <svg
                                                                class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                                                <path fill-rule="evenodd"
                                                                      d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                      clip-rule="evenodd"/>
                                                            </svg>
                                                            Edit
                                                        </a>
                                                        <a href="#"
                                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                           role="menuitem">
                                                            <!-- Heroicon name: duplicate -->
                                                            <svg
                                                                class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"/>
                                                                <path
                                                                    d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"/>
                                                            </svg>
                                                            Duplicate
                                                        </a>
                                                        <a href="#"
                                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                           role="menuitem">
                                                            <!-- Heroicon name: user-add -->
                                                            <svg
                                                                class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                                                            </svg>
                                                            Share
                                                        </a>
                                                    </div>
                                                    <div class="py-1" role="none">
                                                        <a href="#"
                                                           class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                           role="menuitem">
                                                            <!-- Heroicon name: trash -->
                                                            <svg
                                                                class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                      clip-rule="evenodd"/>
                                                            </svg>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                            <div class="flex items-center space-x-3 lg:pl-2">
                                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                                     aria-hidden="true"></div>
                                                <a href="#" class="truncate hover:text-gray-600">
                                                  <span>
                                                    GraphQL API
                                                    <span class="text-gray-500 font-normal">in Engineering</span>
                                                  </span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                                            <div class="flex items-center space-x-2">
                                                <div class="flex flex-shrink-0 -space-x-1">
                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">
                                                </div>

                                                <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                                            </div>
                                        </td>
                                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                            March 17, 2020
                                        </td>
                                        <td class="pr-6">
                                            <div class="relative flex justify-end items-center">
                                                <button id="project-options-menu-0" aria-haspopup="true" type="button"
                                                        class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                                    <span class="sr-only">Open options</span>
                                                    <!-- Heroicon name: dots-vertical -->
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                            <div class="flex items-center space-x-3 lg:pl-2">
                                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                                     aria-hidden="true"></div>
                                                <a href="#" class="truncate hover:text-gray-600">
                                                  <span>
                                                    GraphQL API
                                                    <span class="text-gray-500 font-normal">in Engineering</span>
                                                  </span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                                            <div class="flex items-center space-x-2">
                                                <div class="flex flex-shrink-0 -space-x-1">
                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">
                                                </div>

                                                <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                                            </div>
                                        </td>
                                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                            March 17, 2020
                                        </td>
                                        <td class="pr-6">
                                            <div class="relative flex justify-end items-center">
                                                <button id="project-options-menu-0" aria-haspopup="true" type="button"
                                                        class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                                    <span class="sr-only">Open options</span>
                                                    <!-- Heroicon name: dots-vertical -->
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                            <div class="flex items-center space-x-3 lg:pl-2">
                                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600"
                                                     aria-hidden="true"></div>
                                                <a href="#" class="truncate hover:text-gray-600">
                                                  <span>
                                                    GraphQL API
                                                    <span class="text-gray-500 font-normal">in Engineering</span>
                                                  </span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                                            <div class="flex items-center space-x-2">
                                                <div class="flex flex-shrink-0 -space-x-1">
                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">

                                                    <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white"
                                                         src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                         alt="">
                                                </div>

                                                <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                                            </div>
                                        </td>
                                        <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                            March 17, 2020
                                        </td>
                                        <td class="pr-6">
                                            <div class="relative flex justify-end items-center">
                                                <button id="project-options-menu-0" aria-haspopup="true" type="button"
                                                        class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                                    <span class="sr-only">Open options</span>
                                                    <!-- Heroicon name: dots-vertical -->
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- More project rows... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
