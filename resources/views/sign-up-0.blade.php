@extends('layouts.sign-up')

@section('contenu')

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

@endsection
