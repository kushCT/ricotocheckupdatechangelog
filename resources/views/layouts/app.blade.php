<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Rico'))</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white flex flex-col">
            {{-- navigation --}}
            @livewire('navigation')

            <div class="sub-header flex-shrink-0 shadow-sm py-4 px-16">
                {{ $header }}
            </div>
        </header>

        <main class="px-16">
            {{ $slot }}
        </main>
    </div>

    <!-- Scripts -->
    @livewireScripts
</body>
</html>
