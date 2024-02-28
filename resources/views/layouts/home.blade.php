<!-- Side bar / Menu hamburger après connexion -->

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

        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased bg-light-blue">

        <!-- Barre de navigation -->
        <livewire:layout.home/>

        <!-- Page d'accueil -->
        @if (isset($header))
            <header class="bg-dark-blue w-full">
                <div class="flex flex-col items-center h-auto max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        
        <!-- Contenu de la page -->
        <div>
            {{ $slot }}
        </div>   

        <!-- Footer / Barre de navigation du bas --> 
        <x-footer-home></x-footer-home>

    </body>
</html>