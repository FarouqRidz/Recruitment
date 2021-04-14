<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="h-screen bg-gray-200 overflow-hidden font-sans antialiased">
        <div>
            @include('layouts.navigation')
        </div>
        <div class="h-full pb-16">
            <!-- Page Content -->
            <main class="flex h-full overflow-hidden">
                <div class="flex-none w-56 pl-2 z-10">
                    @include('layouts.sidemenu')
                </div>
                <div class="w-full bg-white rounded-tl-3xl shadow-xl">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
