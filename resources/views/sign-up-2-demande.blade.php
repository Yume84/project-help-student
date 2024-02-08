@extends('layouts.sign-up')

@section('contenu')

<div class="back">
  <a href="home"><button class="btn home"><img src="/images/icone/home.png" alt="home"></button></a>
</div>

<div class="mascotte mascotte-1">
  <img src="/images/logo/mascotte.png" alt="mascotte" class="position">
</div>
<div class="chargement page-2">
  <div class="remplissage"></div>
</div>

<h3 id="choix-text">Pour quoi as-tu besoin d'aide ?</h3>
<div class="choix">
  <button class="option" id="universite" onclick="toggleListeAide(this)">Administration scolaire</button>
  <button class="option" id="gouvernement" onclick="toggleListeAide(this)">Services publics</button>
  <button class="option" id="mixte" onclick="toggleListeAide(this)">Les deux</button>
  <button class="option" id="hesitation" onclick="toggleSaitPas(this)">Je ne sais pas</button>
</div>

<div class="liste" id="scolarite">
  <h3 id="liste-text">Coche les aides dont tu as besoin :</h3>
  <button class="coche" id="inscriptions" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_inscriptions">Inscriptions</button>
  <button class="coche" id="bourse" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_bourse">Demande de bourse</button>
  <button class="coche" id="autres" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_autres">Autres</button>
</div>

<div class="liste" id="services">
  <h3 id="liste-text">Coche les aides dont tu as besoin :</h3>
  <button class="coche" id="caf" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_caf">CAF</button>
  <button class="coche" id="ameli" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_ameli">Ameli</button>
  <button class="coche" id="sejour" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_sejour">Permis de séjour</button>
  <button class="coche" id="autres" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_autres">Autres</button>
</div>

<div class="liste" id="deux">
  <h3 id="liste-text">Coche les aides dont tu as besoin :</h3>
  <button class="coche" id="inscriptions" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_inscriptions">Inscriptions</button>
  <button class="coche" id="bourse" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_bourse">Demande de bourse</button>
  <button class="coche" id="caf" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_caf">CAF</button>
  <button class="coche" id="ameli" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_ameli">Ameli</button>
  <button class="coche" id="sejour" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_sejour">Permis de séjour</button>
  <button class="coche" id="autres" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_autres">Autres</button>
</div>

<div class="navigation">
  <a href="sign-up-1"><button class="btn retour">Retour</button></a>
<a href="sign-up-3?type=demande"><button class="btn suivant" id="suivant">Suivant</button></a>
</div>

@endsection
