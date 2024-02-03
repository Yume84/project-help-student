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
    @vite(['resources/css/style.css', 'resources/css/sign-up.css', 'resources/js/sign-up.js])
</head>

<body>

<div class="back">
  <a href="home"><button class="btn home"><img src="/images/icone/home.png" alt="home"></button></a>
</div>

<div class="mascotte mascotte-1">
  <img src="/images/logo/mascotte.png" alt="mascotte" class="position">
</div>
<div class="chargement page-1">  
  <div class="remplissage"></div>
</div>

<h3>Pourquoi es-tu ici ?</h3>
<div class="choix">
  <button class="option" id="demande" onclick="toggleUtilisation(this)">Demander de l'aide</button>
  <button class="option" id="propose" onclick="toggleUtilisation(this)">Proposer ton aide</button>
</div>

<div class="navigation">
  <a href="sign-up-0"><button class="btn retour">Retour</button></a>
  <a href="sign-up-2-demande"><button class="btn suivant" id="suivant">Suivant</button></a>
</div>

</body>
</html>