<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Studdle</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-dark-blue">

        <div class="mx-auto flex flex-col items-center justify-center h-screen">

            <h3 class="text-4xl text-blue font-extrabold uppercase mb-10">Inscription réussie !</h3>

            <a href="{{ route('welcome') }}">
                <img src="images/logo/mascotte.png" alt="Logo_Studdle" class="inline-block step-1"/>
            </a> 

            <div class="text-light-blue text-center text-3xl mt-10 mb-10 mx-2">
                <p>Salut <span class="bg-blue rounded-lg text-light-blue px-2 font-bold mr-2">{{ request()->pseudo }}</span>!</p>
                <p>Merci de nous avoir rejoint.</p>
                <p>Tu peux maintenant te connecter pour accéder à l'espace communautaire.</p>
            </div>

            <a href="{{ route('dashboard') }}">
                <x-register-button type="button">
                    {{ __('Log in') }}
                </x-register-button>
            </a>

        </div>
    
</body>
</html>