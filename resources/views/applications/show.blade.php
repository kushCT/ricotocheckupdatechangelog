<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-black text-2xl leading-tight">
            {{ __($application->name) }}
        </h2>
    </x-slot>
    <div>
        {{-- Success is as dangerous as failure. --}}
        Application detail
    </div>
</x-app-layout>
