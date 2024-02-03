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
    @vite(['resources/css/style.css', 'resources/css/home.css'])
</head>

<header>
  <div class="logo-container">
    <h1><a href="home">STODDLE</a></h1>
  </div>
  <div class="menu-container">
    <div class="menu-icon">
      <img src="/images/drapeau/france.png" alt="FR" class="langue">
    <img src="/images/icone/arrow.png" alt="arrow" class="arrow">

      <div class="menu-list">
        <nav id="menu-nav">
          <a href="#"><img src="/images/drapeau/france.png" alt="FR" class="langue">Français</a>
          <a href="#"><img src="/images/drapeau/royaume-uni.png" alt="EN" class="langue">Anglais</a>
          <a href="#"><img src="/images/drapeau/allemagne.png" alt="DE" class="langue">Allemand</a>
          <a href="#"><img src="/images/drapeau/espagne.png" alt="ES" class="langue">Espagnol</a>
          <a href="#"><img src="/images/drapeau/italie.png" alt="IT" class="langue">Italien</a>
          <a href="#"><img src="/images/drapeau/coree-du-sud.png" alt="KR" class="langue">Coréen</a>
        </nav>
      </div>
    </div>
  </div>
</header>

<div class="illustration">
  <div class="mascotte">
    <img src="/images/logo/mascotte.png" alt="mascotte" class="logo">
  </div>
  <div class="action">
    <h1>L'application qui aide les étudiants étrangers dans leurs démarches administratives !</h1>
      <div class="navigation">
        <a href="sign-up" class="btn">C'est parti !</a>
        <a href="#" class="btn">J'ai déjà un compte</a>
      </div>
  </div>
</div>

<div class="presentation">
  <h2>C'est quoi ?</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
  </p>
</div>

<div class="presentation">
  <h2>Récapitulatif des aides</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
  </p>
  <h3>Social</h3>
</div>


<div class="wrapper">
  <i id="left" class="fa-solid fa-angle-left"></i>
    <ul class="carousel">
      <li class="card">
        <img src="https://img.freepik.com/photos-premium/bateau-lac-montagnes-arriere-plan_865967-5725.jpg" alt="img" draggable="false">
        <h2>Blanche Pearson</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, </p>
        <div class="navigation"><a href="#" class="btn">En savoir plus</a></div>
      </li>
      <li class="card">
        <img src="https://img.freepik.com/premium-photo/boat-with-word-e-side_924629-27014.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699228800&semt=sph" alt="img" draggable="false">
        <h2>Joenas Brauers</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.</p>
        <div class="navigation"><button class="btn"><a href="#">En savoir plus</a></button></div>
      </li>
      <li class="card">
        <img src="https://img.freepik.com/photos-premium/bateau-lac-montagnes-arriere-plan_865967-5725.jpg" alt="img" draggable="false">
        <h2>Lariach French</h2>
        <p>Online Teacher</p>
        <div class="navigation"><button class="btn"><a href="#">En savoir plus</a></button></div>
      </li>
      <li class="card">
        <img src="https://img.freepik.com/photos-premium/bateau-lac-montagnes-arriere-plan_865967-5725.jpg" alt="img" draggable="false">
        <h2>James Khosravi</h2>
        <p>Freelancer</p>
        <div class="navigation"><button class="btn"><a href="#">En savoir plus</a></button></div>
        </li>
      <li class="card">
        <img src="https://img.freepik.com/photos-premium/bateau-lac-montagnes-arriere-plan_865967-5725.jpg" alt="img" draggable="false">
        <h2>Kristina Zasiadko</h2>
        <p>Bank Manager</p>
        <div class="navigation"><button class="btn"><a href="#">En savoir plus</a></button></div>
      </li>
      <li class="card">
        <img src="https://img.freepik.com/photos-premium/bateau-lac-montagnes-arriere-plan_865967-5725.jpg" alt="img" draggable="false">
        <h2>Donald Horton</h2>
        <p>App Designer</p>
        <div class="navigation"><button class="btn"><a href="#">En savoir plus</a></button></div>
      </li>
    </ul>
  <i id="right" class="fa-solid fa-angle-right"></i>
</div>

<div class="presentation">
  <h2>Encore besoin d'aide ?</h2>
  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci 
  </p>
  <div class="navigation">
    <a href="sign-up" class="btn">C'est parti !</a>
    <a href="#" class="btn">J'ai déjà un compte</a>
  </div>
</div>

<div class="footer">
  <div class="infos"><a href="#">À propos</a></div>
  <div class="infos"><a href="#">Mentions légales</a></div>
  <div class="infos"><a href="#">Aide</a></div>
</div>

</body>
</html>