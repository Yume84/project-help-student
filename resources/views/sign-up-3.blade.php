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
<div class="chargement page-3">
    <div class="remplissage"></div>
</div>

<h3>Quelle(s) langue(s) parles-tu ?</h3>
<div class="choix">
  <button class="langue" onclick="toggleListeLangue(this)">Sélectionne ta / tes langue(s)<img src="images/icone/arrow.png" alt="arrow" class="arrow"></button>
</div>

<div class="liste menu-langue" id="langue">
    <button class="coche" id="france" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_france"><img src="images/drapeau/france.png" alt="FR" class="drapeau">Français</button>
    <button class="coche" id="royaume-uni" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_royaume-uni"><img src="images/drapeau/royaume-uni.png" alt="EN" class="drapeau">Anglais</button>
    <button class="coche" id="allemagne" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_allemagne"><img src="images/drapeau/allemagne.png" alt="DE" class="drapeau">Allemand</button>
    <button class="coche" id="espagne" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_espagne"><img src="images/drapeau/espagne.png" alt="ES" class="drapeau">Espagnol</button>
    <button class="coche" id="italie" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_italie"><img src="images/drapeau/italie.png" alt="IT" class="drapeau">Italien</button>
    <button class="coche" id="coree-du-sud" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_coree-du-sud"><img src="images/drapeau/coree-du-sud.png" alt="KR" class="drapeau">Coréen</button>
</div>

<h3>Quel est ton niveau en français ?</h3>
<div class="choix">
  <button class="option" id="a1" onclick="toggleNiveauLangue(this)">A1 : Je débute</button>
  <button class="option" id="a2" onclick="toggleNiveauLangue(this)">A2 : Je comprends quelques mots</button>
  <button class="option" id="b1-b2" onclick="toggleNiveauLangue(this)">B1-B2 : Je peux communiquer</button>
  <button class="option" id="c1-c2" onclick="toggleNiveauLangue(this)">C1-C2 : Je suis à l'aise</button>
</div>

<div class="navigation">
    <a id="lien-retour" href=""><button class="btn retour">Retour</button></a>
    <a href="sign-up-4"><button class="btn suivant" id="suivant">Suivant</button></a>
</div>

</div>

</body>

</html>
