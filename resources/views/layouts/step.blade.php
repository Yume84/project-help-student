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
        <div class="min-h-screen flex-col justify-center items-center mx-6 rounded"> <!--min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 mx-4 bg-gray-100 dark:bg-gray-900-->

            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 pt-12 overflow-hidden">
                <a href="{{ route('welcome') }}">
                    <x-register-button type="button" class="px-2.5 py-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-light-blue w-8 h-8">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                    </x-register-button>
                </a>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-hidden">
                @yield('content')
            </div>

        </div>
    </body>
</html>
</html>
