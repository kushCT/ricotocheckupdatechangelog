@props(['panelTitle' => 'Panel Title', 'panelDescription' => 'Panel description', 'headerClasses' => 'py-6 px-4 sm:px-6 bg-black'])

<div x-data="{open: false}" @close.stop="open = false" @keydown.window.escape="open = false">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div class="fixed inset-0 overflow-hidden" x-show="open" style="display: none;">
        <div class="absolute inset-0 overflow-hidden">
            <section
                class="absolute inset-y-0 pl-16 max-w-full right-0 flex"
                aria-labelledby="slide-over-heading"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                x-show="open"
                @click.away="open = false">
                <div class="w-screen max-w-md flex flex-col">
                    <div class="flex-shrink-0 {{ $headerClasses }}">
                        <div class="flex items-center justify-between">
                            <h2 id="slide-over-heading" class="text-lg font-medium text-white">{{ $panelTitle }}</h2>
                            <div class="ml-3 h-7 flex items-center">
                                <button @click="open = !open" class="text-indigo-200 hover:text-white focus:outline-none">
                                    <span class="sr-only">Close panel</span>
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-indigo-300">{{ $panelDescription }}</p>
                        </div>
                    </div>

                    <div class="flex-grow">
                        {{ $content }}
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
