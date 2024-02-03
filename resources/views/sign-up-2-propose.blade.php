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
<div class="chargement page-2">
  <div class="remplissage"></div>
</div>

<h3 id="choix-text">Pour quoi peux-tu proposer ton aide ?</h3>
<div class="choix">
  <button class="option" id="universite" onclick="toggleListeAide(this)">Administration scolaire</button>
  <button class="option" id="gouvernement" onclick="toggleListeAide(this)">Services publics</button>
  <button class="option" id="mixte" onclick="toggleListeAide(this)">Les deux</button>
  <button class="option" id="hesitation" onclick="toggleSaitPas(this)">Je ne sais pas</button>
</div>

<div class="liste" id="scolarite">
  <h3 id="liste-text">Coche les aides que tu peux fournir :</h3>
  <button class="coche" id="inscriptions" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_inscriptions">Inscriptions</button>
  <button class="coche" id="bourse" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_bourse">Demande de bourse</button>
  <button class="coche" id="autres" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_autres">Autres</button>
</div>

<div class="liste" id="services">
  <h3 id="liste-text">Coche les aides que tu peux fournir :</h3>
  <button class="coche" id="caf" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_caf">CAF</button>
  <button class="coche" id="ameli" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_ameli">Ameli</button>
  <button class="coche" id="sejour" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_sejour">Permis de séjour</button>
  <button class="coche" id="autres" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_autres">Autres</button>
</div>

<div class="liste" id="deux">
  <h3 id="liste-text">Coche les aides que tu peux fournir :</h3>
  <button class="coche" id="inscriptions" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_inscriptions">Inscriptions</button>
  <button class="coche" id="bourse" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_bourse">Demande de bourse</button>
  <button class="coche" id="caf" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_caf">CAF</button>
  <button class="coche" id="ameli" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_ameli">Ameli</button>
  <button class="coche" id="sejour" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_sejour">Permis de séjour</button>
  <button class="coche" id="autres" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_autres">Autres</button>
</div>

<div class="navigation">
  <a href="sign-up-1"><button class="btn retour">Retour</button></a>
  <a href="sign-up-3?type=propose"><button class="btn suivant" id="suivant">Suivant</button></a>
</div>

</body>

</html>
