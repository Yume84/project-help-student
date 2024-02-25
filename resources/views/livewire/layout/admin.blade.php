<nav class="bg-dark-blue shadow-lg">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between md:justify-end h-16 ">
            <div class="absolute inset-y-0 left-0 flex items-center">
                               
                <!-- Menu hamburger -->
                <x-menu-hamburger></x-menu-hamburger>

            </div>

            <!-- Logo au centre de la barre de navigation --> 
            <div class="flex flex-1 items-center justify-center md-hidden">
                <div class="flex flex-shrink-0 items-center">
                    <x-studdle-logo :href="route('dashboard')" class="block h-10 w-auto text-light-blue"></x-studdle-logo>                         
                </div>
            </div>

            <!-- Dropdown menu à remplacer avec les langues --> 
            <div class="absolute inset-y-0 right-0 flex items-center">
                <x-dropdown-flag align="right" width="48">

                    <x-slot name="trigger"> <!-- Contenu visible -->
                        <button class="flex items-center text-light-blue bg-dark-blue hover:bg-blue px-3 py-2 mr-2 rounded-md focus:outline-none transition ease-in-out duration-200">
                            <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div> <!-- A changer avec la langue choisie -->

                                <div class="ms-1"> <!-- Flèche -->
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </button>
                    </x-slot>

                    <x-slot name="flag"> <!-- Liste déroulante des drapeaux et des langues -->
                        <!-- Langue : Français -->
                        <x-dropdown-link-flag :href="route('dashboard')" :image="asset('images/drapeau/france.png')" :alt="'francais'"> <!--Remplacer la route et ajouter la traduction de la page au clic -->
                            {{ __('Français') }}
                        </x-dropdown-link-flag>
                                                                               
                        <!-- Langue : Anglais -->
                        <x-dropdown-link-flag :href="route('dashboard')" :image="asset('images/drapeau/royaume-uni.png')" :alt="'anglais'"> <!--Remplacer la route et ajouter la traduction de la page au clic -->
                            {{ __('English') }}
                        </x-dropdown-link-flag>

                        <!-- Langue : Espagnol -->
                        <x-dropdown-link-flag :href="route('dashboard')" :image="asset('images/drapeau/espagne.png')" :alt="'espagnol'"> <!--Remplacer la route et ajouter la traduction de la page au clic -->
                            {{ __('Español') }}
                        </x-dropdown-link-flag>

                        <!-- Langue : Allemagne -->
                        <x-dropdown-link-flag :href="route('dashboard')" :image="asset('images/drapeau/allemagne.png')" :alt="'allemand'"> <!--Remplacer la route et ajouter la traduction de la page au clic -->
                            {{ __('Deutsch') }}
                        </x-dropdown-link-flag>
                                                                               
                        <!-- Langue : Italien -->
                        <x-dropdown-link-flag :href="route('dashboard')" :image="asset('images/drapeau/italie.png')" :alt="'italien'"> <!--Remplacer la route et ajouter la traduction de la page au clic -->
                            {{ __('Italiano') }}
                        </x-dropdown-link-flag>

                        <!-- Langue : Coréen -->
                        <x-dropdown-link-flag :href="route('dashboard')" :image="asset('images/drapeau/coree-du-sud.png')" :alt="'coreen'"> <!--Remplacer la route et ajouter la traduction de la page au clic -->
                            {{ __('한국인') }}
                        </x-dropdown-link-flag>

                    </x-slot>

                </x-dropdown-flag>
            </div>

        </div>
    </div>
</nav>