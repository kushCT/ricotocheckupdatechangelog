<x-app-layout>
    <main class="flex min-h-screen bg-gray-200">
        <x-app-sidebar />

        {{-- App content --}}
        <div class="flex-grow flex flex-col">
            <x-app-navigation />

            <div class="flex-grow flex flex-col">
                <div class="flex-grow flex flex-col p-12">
                    <x-app-breadcrumbs />

                    <div class="flex-grow flex-none mt-10">
                        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                            <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                                <div class="flex-1 flex flex-col p-8">
                                    <img class="w-32 h-32 flex-shrink-0 mx-auto bg-black rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                                    <h3 class="mt-6 text-gray-900 text-sm font-medium">Jane Cooper</h3>
                                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                                        <dt class="sr-only">Title</dt>
                                        <dd class="text-gray-500 text-sm">Paradigm Representative</dd>
                                        <dt class="sr-only">Role</dt>
                                        <dd class="mt-3">
                                            <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">Admin</span>
                                        </dd>
                                    </dl>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
