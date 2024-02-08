@extends('layouts.sign-up')

@section('contenu')

<div class="back">
  <a href="home"><button class="btn home"><img src="/images/icone/home.png" alt="home"></button></a>
</div>

<div class="mascotte mascotte-1">
  <img src="/images/logo/mascotte.png" alt="mascotte" class="position">
</div>
<div class="chargement page-5">  
  <div class="remplissage"></div>
</div>

<h3>C'est la dernière étape !</h3>

<form method="post" action="#">
  <div class="cadre">
    <label for="name">Nom<input id="name" type="text" placeholder="Votre nom"/></label>
    <label for="surname">Prénom<input id="surname" type="text" placeholder="Votre prénom"/></label>
    <label for="email">Email<input id="email" type="email" placeholder="Votre email"/></label>
    <label for="password">Mot de passe<input id="password" type="password" placeholder="Votre mot de passe"/></label>
    <label for="password">Confirmez votre mot de passe<input id="password" type="password" placeholder="Confirmez votre mot de passe"/></label>

  <div class="checkbox">
    <input id="rgpd" type="checkbox" class="checkbox"/>
    <label for="rgpd" class="rgpd">J'accepte les <a href="#" class="rgpd" onclick="openPopup()">conditions d'utilisation</a></label>
  </div>

  <div class="checkbox">
    <input id="remember-me" type="checkbox" class="checkbox"/>
    <label for="remember-me" class=remember-me>Se souvenir de moi</label>
  </div>

  </div>
</form>

<div class="popup" id="rgpdPopup">
  <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <div class="popup-text">
      <h5>Conditions d'utilisation</h5>
      <p>Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.
      Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.
      Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.</p>
    </div>
  </div>
</div>

<div class="navigation">
  <a href="sign-up-4"><button class="btn retour">Retour</button></a>
  <a href="#"><button class="btn suivant" id="suivant">Suivant</button></a>
</div>

@endsection