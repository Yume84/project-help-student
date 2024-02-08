@extends('layouts.sign-up')

@section('contenu')

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

@endsection