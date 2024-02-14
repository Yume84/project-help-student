<!-- Side bar / Menu hamburger après connexion -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased">

        <div class="relative min-h-screen md:flex" x-data="{ open: true }">

            <!--Sidebar -->
            <aside :class="{ '-translate-x-full': !open }" class="z-10 bg-dark-blue text-light-blue w-80 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:transform-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg">
               
            <!-- Logo -->
                <div class="flex items-center justify-between px-2 mb-4">
                    <div class="flex items-center space-x-4">
                        <a href="">
                            <x-application-logo class="block h-10 w-auto fill-current text-light-blue"/> <!-- Changer avec notre logo -->
                        </a> 
                        <span class="text-2xl font-extrabold">Mon compte</span>
                    </div>

                    <button type="button" @click="open = !open" class="md:hidden lg:inline-flex p-2 items-center justify-center rounded-md text-light-blue hover:bg-medium-blue focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Nav Links -->
                <nav>
                    <x-side-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        Mon compte
                    </x-side-nav-link>
                    <x-side-nav-link href="{{ route('settings') }}" :active="request()->routeIs('settings')"> <!-- Remplacer dashboard par settings -->
                        Paramètres et confidentialité
                    </x-side-nav-link>
                    <x-side-nav-link href="{{ route('notifications') }}" :active="request()->routeIs('notifications')"> <!-- Remplacer dashboard par notifications -->
                        Notifications
                    </x-side-nav-link>
                    <x-side-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')"> <!-- Remplacer dashboard par contact -->
                        Contact
                    </x-side-nav-link>
                    <x-side-nav-link href="{{ route('logout') }}" :active="request()->routeIs('logout')"> <!-- Remplacer dashboard par log out -->
                        Déconnexion
                    </x-side-nav-link>
                </nav>
            </aside>

            <!-- Main Content-->
            <main class="flex-1 absolute w-full bg-light-blue h-screen"> <!--Attention au absolute -->
                <nav class="bg-dark-blue shadow-lg">
                    <div class="mx-auto sm:px-6 lg:px-8">
                        <div class="relative flex items-center justify-between md:justify-end h-16">
                            <div class="absolute inset-y-0 left-0 flex items-center ">
                               
                            <!-- Menu hamburger -->
                                <button type="button" @click="open = !open" @click.away="open = false" class="inline-flex items-center justify-center p-2 ml-2 rounded-md text-light-blue hover:bg-medium-blue focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>
                </nav>
                
                <div>
                    {{ $slot }}
                </div>

            </main> 
        </div>
        
    </body>
</html>


