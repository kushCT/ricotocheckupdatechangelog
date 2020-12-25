<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Rico') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
</head>
<body class="antialiased">
    {{-- Main container --}}
    <main class="flex min-h-screen bg-gray-200">
        <x-app-sidebar />

        {{-- App content --}}
        <div class="flex-grow flex flex-col">
            <x-app-navigation />

            <div class="flex-grow flex flex-col">
                {{ $slot }}
            </div>
        </div>
    </main>

    @livewireScripts
</body>
</html>
