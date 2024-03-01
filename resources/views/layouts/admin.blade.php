<!-- Side bar / Menu hamburger après connexion -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Studdle') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased bg-light-blue">

        <div class="relative" x-data="{ open: false }">

            <!-- Sidebar -->
            <aside :class="{ '-translate-x-full': !open }" class="z-10 bg-dark-blue text-light-blue w-80 px-2 py-4 fixed inset-y-0 left-0 transform md:transform-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg">
               
            <!-- Logo à l'intérieur du menu hamburger -->
                <div class="flex items-center justify-between px-2 mb-4">
                    <div class="flex items-center space-x-4">
                        <x-studdle-mascotte :href="route('dashboard')" class="block h-10 w-auto text-light-blue"></x-studdle-mascotte>                               
                        <span class="text-2xl font-extrabold">Mon compte</span>
                    </div>

                    <button type="button" @click="open = !open" class="md:hidden lg:inline-flex p-2 items-center justify-center rounded-md text-light-blue hover:bg-blue focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Liens à l'intérieur du menu hamburger -->
                <nav>
                <x-hamburger-link href="{{ route('account') }}" :active="request()->routeIs('account')">
                    <div class="flex items-center">
                        <img src="{{ asset('/images/exemple.jpg') }}" alt="avatar" class="block w-20 h-20 object-cover rounded border-blue">
                        <div class="ml-4 flex flex-col">
                            <div x-data="{ name: '{{ auth()->user()->pseudo }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                            <span class="mt-2">Aller sur mon profil</span>
                        </div>
                    </div>
                </x-hamburger-link>
                    <x-hamburger-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">
                        Paramètres et confidentialité
                    </x-hamburger-link>
                    <x-hamburger-link href="{{ route('notifications') }}" :active="request()->routeIs('notifications')"> <!-- Remplacer dashboard par notifications -->
                        Notifications
                    </x-hamburger-link>
                    <x-hamburger-link href="{{ route('contact') }}" :active="request()->routeIs('contact')"> <!-- Remplacer dashboard par contact -->
                        Contact
                    </x-hamburger-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <x-hamburger-link onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer;">
                        Déconnexion
                    </x-hamburger-link>
                    </form>
                </nav>
            </aside>

            <!-- Barre de navigation-->
            <main class="flex-1 fixed w-full"> <!--Attention au absolute -->
            
                <livewire:layout.admin/>
                
                <!-- Seconde barre de navigation seulement pour la page de feed (dashboard) avec 2 choix-->
                @if (isset($feed))
                <nav class="flex bg-white shadow h-16">
                    {{ $feed }}
                </nav>
                @endif

                <!-- Seconde barre de navigation avec le titre pour toutes les autres pages -->
                @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @endif

            </main> 

            <!-- Contenu de la page -->
            <div class="py-16">
                {{ $slot }}
            </div>   

            <!-- Footer / Barre de navigation du bas --> 
            <x-footer-account></x-footer-account>

        </div>

    </body>
</html>