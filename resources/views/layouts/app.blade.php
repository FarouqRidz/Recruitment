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
    <body class="h-screen bg-gradient-to-r from-gray-700 to-pink-700 overflow-hidden font-sans antialiased relative">
        <div>
            @include('layouts.navigation')
        </div>
        <div class="h-full pb-16">
            <!-- Page Content -->
            <main class="flex h-full overflow-hidden">
                <div class="flex-none w-56 pl-2 z-10">
                    @include('layouts.sidemenu')
                </div>
                <div class="w-full bg-gray-50 rounded-tl-3xl shadow-xl">
                    {{ $slot }}
                </div>
            </main>
            <div id="loading" class="hidden absolute top-0 left-0 flex justify-center items-center h-screen w-screen bg-black bg-opacity-30 cursor-wait z-10">
                <div class="flex space-x-2 animate-bounce px-8 py-3 bg-white shadow-lg rounded-full font-semibold">
                    <svg class="w-5 animate-spin" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <div>Loading...</div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        @stack('scripts')
    </body>
</html>
