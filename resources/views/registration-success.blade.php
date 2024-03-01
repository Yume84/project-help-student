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

        <div class="mx-auto flex flex-col items-center justify-center" >

            <h3 class="text-6xl text-blue font-extrabold uppercase">Bienvenue</h3>

            <a href="{{ route('/') }}">
                <img src="images/logo/mascotte.png" alt="Logo_Studdle" class="inline-block w-44 h-full"/>
            </a> 

            <h4 class="text-3xl text-blue font-bold uppercase">Inscription réussie !</h4>
            <p class="text-light-blue text-2xl">Salut, <b>{{ request()->name }}</b>, merci de nous avoir rejoint !</p>
            <a href="/dashboard" class="text-light-blue text-2xl">Tu peux maintenant te connecter pour accéder à l'espace communautaire !</a>

        </div>
    
</body>
</html>