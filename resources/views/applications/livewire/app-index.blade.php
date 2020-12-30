<div class="flex flex-col">
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
        <div wire:init="loadApps">
            <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">{{ __('Application list') }}</h2>
            <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @forelse ($applications as $app)
                    <livewire:application-single :app="$app" :key="'apps_'.$app->id"/>
                @empty
                    <p>Loading</p>
                @endforelse
            </ul>
        </div>
    </div>
</div>
