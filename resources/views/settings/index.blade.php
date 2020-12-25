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
                        List des membres
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
