<div wire:init="loadArchived" class="h-full">
    @if(count($applications) > 0)
        <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">
            {{ __('Archived applications') }}
        </h2>
        <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($applications as $app)
                <livewire:application-single :app="$app" :key="'archived_'.$app->id"/>
            @endforeach
        </ul>
    @else
        <div class="flex h-full items-center justify-center flex-col">
            <svg class="w-20 h-20 opacity-5 mb-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
            </svg>
            <h3 class="font-bold text-xl opacity-30">{{ __('Archived applications') }}</h3>
            <p class="font-light text-lg text-gray-300 tracking-wide">
                {{ __('You have no archived applications') }}
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
