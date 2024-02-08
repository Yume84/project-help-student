<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Studdle</title>

    <!-- Scripts -->
    @vite(['resources/css/style.css', 'resources/css/sign-up.css', 'resources/js/sign-up.js'])
</head>

<body>

@yield('contenu')

</body>
</html>