<div wire:init="loadArchived">
    <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">{{ __('Archived applications') }}</h2>

    <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($applications as $app)
            <livewire:application-single :app="$app" :key="'archived_'.$app->id" />
        @endforeach
    </ul>
</div>
