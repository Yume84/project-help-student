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

            <!-- Barre de navigation-->
            <main class="flex-1 fixed w-full"> <!--Attention au absolute -->
            
                <livewire:layout.admin/>
                

            </main> 

            <!-- Contenu de la page -->
            <div class="py-16">
                {{ $slot }}
            </div>   

            <!-- Footer / Barre de navigation du bas --> 
            <livewire:layout.footer-account/>

        </div>

    </body>
</html>