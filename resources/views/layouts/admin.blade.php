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

        <div class="relative min-h-screen md:flex" x-data="{ open: false }">

            <!-- Sidebar -->
            <aside :class="{ '-translate-x-full': !open }" class="z-10 bg-dark-blue text-light-blue w-80 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:transform-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg">
               
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
                            <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
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
            <main class="flex-1 absolute w-full h-screen"> <!--Attention au absolute -->
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

                <!-- Contenu de la page -->
                <div>
                    {{ $slot }}
                </div>   

                <!-- Footer / Barre de navigation du bas --> 
                <footer class="bg-dark-blue shadow-lg">
                        <div class="mx-auto sm:px-6 lg:px-8">
                            <div class="grid grid-cols-5 gap-1 items-center justify-center h-16">

                                <x-footer-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" block w-6 h-6 text-light-blue">
                                        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                    </svg>
                                </x-footer-link>

                                <x-footer-link href="{{ route('search') }}" :active="request()->routeIs('search')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block w-6 h-6 text-light-blue">
                                        <path d="M8.25 10.875a2.625 2.625 0 1 1 5.25 0 2.625 2.625 0 0 1-5.25 0Z" />
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.125 4.5a4.125 4.125 0 1 0 2.338 7.524l2.007 2.006a.75.75 0 1 0 1.06-1.06l-2.006-2.007a4.125 4.125 0 0 0-3.399-6.463Z" clip-rule="evenodd" />
                                    </svg>
                                </x-footer-link>

                                <x-footer-link href="{{ route('add') }}" :active="request()->routeIs('add')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block w-6 h-6 text-light-blue">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                                    </svg>
                                </x-footer-link>

                                <x-footer-link href="{{ route('notifications') }}" :active="request()->routeIs('notifications')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block w-6 h-6 text-light-blue">
                                        <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z" clip-rule="evenodd" />
                                    </svg>
                                </x-footer-link>

                                <x-footer-link href="{{ route('messages') }}" :active="request()->routeIs('messages')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block w-6 h-6 text-light-blue">
                                        <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                        <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                                    </svg>
                                </x-footer-link>

                            </div>
                        </div>
                    </footer>

            </main> 
            
        </div>
    </body>
</html>