@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-white p-3 bg-black rounded-md'
                : 'text-gray-500 p-3 focus:outline-none lg:hover:text-black focus:text-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
