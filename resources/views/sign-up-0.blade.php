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
    @vite(['resources/css/style.css', 'resources/css/sign-up.css', 'resources/js/sign-up.js'])
</head>

<div class="back">
  <a href="home"><button class="btn home"><img src="/images/icone/home.png" alt="home"></button></a>
</div>

<h3>Bienvenue</h3>

<div class="mascotte mascotte-0">
  <img src="/images/logo/mascotte.png" alt="mascotte" class="position">
</div>

<h4>Démarrons ton inscription !</h4>

<div class="navigation">
  <a href="home"><button class="btn retour">Retour</button></a>
  <a href="sign-up-1"><button class="btn suivant suivant-0" id="suivant">Suivant</button></a>
</div>

</body>

</html>
