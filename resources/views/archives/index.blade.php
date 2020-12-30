<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-black text-2xl leading-tight">
            {{ __('Archives') }}
        </h2>
    </x-slot>
    <div class="h-full">
        {{-- Success is as dangerous as failure. --}}
        <livewire:archived-applications />
    </div>
</x-app-layout>
