<!-- Header -->

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Studdle</title>

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

@yield('contenu')

<!-- Footer -->

<div class="footer">
  <div class="infos"><a href="#">À propos</a></div>
  <div class="infos"><a href="#">Mentions légales</a></div>
  <div class="infos"><a href="#">Aide</a></div>
</div>

</body>
</html>