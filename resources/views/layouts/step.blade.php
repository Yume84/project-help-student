<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Studdle') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-dark-blue">
        <div class="min-h-screen flex flex-col justify-center items-center pb-10 mx-6 rounded"> <!--min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 mx-4 bg-gray-100 dark:bg-gray-900-->

            <div class="w-full max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 overflow-hidden">
                @yield('content')
            </div>
            
        </div>
    </body>
</html>
</html>
