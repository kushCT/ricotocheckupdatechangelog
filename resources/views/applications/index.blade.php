<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-black text-2xl leading-tight mr-2">
            {{ __('Applications') }}
        </h2>
    </x-slot>
    <div class="h-full">
        {{-- Success is as dangerous as failure. --}}
        <livewire:application-index />
    </div>
</x-app-layout>
