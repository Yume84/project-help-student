@extends('layouts.sign-up')

@section('contenu')

<div class="back">
    <a href="home"><button class="btn home"><img src="/images/icone/home.png" alt="home"></button></a>
</div>

<div class="mascotte mascotte-1">
    <img src="/images/logo/mascotte.png" alt="mascotte" class="position">
</div>
<div class="chargement page-4">
    <div class="remplissage"></div>
</div>

<h3>Où étudies-tu ?</h3>
<div class="choix">
  <button class="campus" onclick="toggleListeCampus(this)">Sélectionne ton campus<img src="images/icone/arrow.png" alt="arrow" class="arrow"></button>
</div>

<div class="liste menu-campus" id="campus">
    <button class="option" id="campus-1" onclick="toggleCampus(this)">Campus 1</button>
    <button class="option" id="campus-2" onclick="toggleCampus(this)">Campus 2</button>
    <button class="option" id="campus-3" onclick="toggleCampus(this)">Campus 3</button>
    <button class="option" id="campus-4" onclick="toggleCampus(this)">Campus 4</button>
    <button class="option" id="campus-5" onclick="toggleCampus(this)">Campus 5</button>
    <button class="option" id="campus-6" onclick="toggleCampus(this)">Campus 6</button>
</div>

<div class="navigation">
    <a href="sign-up-3"><button class="btn retour">Retour</button></a>
    <a href="sign-up-5"><button class="btn suivant" id="suivant">Suivant</button></a>
</div>

@endsection
