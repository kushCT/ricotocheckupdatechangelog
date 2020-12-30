<div class="flex flex-col h-full">
    <div class="flex-shrink-0" wire:init="loadPinned">
        @if(count($pins) > 0)
            <div class="mb-10">
                <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Pinned Projects</h2>
                <ul class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2 xl:grid-cols-4 mt-3">
                    @foreach($pins as $pin)
                        <livewire:pinned-application :app="$pin" :key="'pinned_'.$pin->id"/>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="flex-1">
        <div wire:init="loadApps" class="h-full">
            @if(count($applications) > 0)
                <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">{{ __('Application list') }}</h2>
                <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($applications as $app)
                        <livewire:application-single :app="$app" :key="'apps_'.$app->id"/>
                    @endforeach
                </ul>
            @else
                <div class="flex h-full items-center justify-center flex-col">
                    <svg class="w-20 h-20 opacity-5 mb-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <h3 class="font-bold text-xl opacity-30">{{ __('My applications') }}</h3>
                    <p class="font-light text-lg text-gray-300 tracking-wide">
                        {{ __('You have not applications') }}
                    </p>
                </div>
            @endif
            @empty($applications)
                <div class="fixed z-50 top-0 left-0 right-0 bottom-0">
                    <div class="flex w-screen h-screen items-center justify-center bg-black opacity-70">
                        <p class="text-white">loading</p>
                    </div>
                </div>
            @endempty
        </div>
    </div>
</div>
