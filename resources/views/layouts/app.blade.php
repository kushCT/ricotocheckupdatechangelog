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
    <div class="h-screen bg-gray-100 flex">
        <!-- sidebar -->
        @livewire('sidebar')

        <div class="flex-grow flex flex-col">
            <header class="flex-shrink-0">
                <!-- navigation -->
                @livewire('navigation')

                <div class="px-14 mt-8">
                    {{ $header }}
                </div>
            </header>

            <!-- content -->
            <main class="flex-grow px-14 pt-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Scripts -->
    @livewireScripts
</body>
</html>
