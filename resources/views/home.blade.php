<x-home-layout>
    <!-- Header / Page de couverture -->

    <x-slot name="header">
        <!-- Contenu principal -->
        <div class="flex flex-col sm:flex-row items-center justify-center">
            <!-- Logo -->
            <x-studdle-logo :href="route('home')" class="w-60 h-60 object-cover text-light-blue mb-4 sm:mb-0 sm:mr-6"></x-studdle-logo>                         
                        
            <!-- Contenu à droite de la photo -->
            <div class="flex flex-col items-center sm:items-start">
                <h1 class="mt-2 font-extrabold text-light-blue text-center text-2xl uppercase sm:text-left">L'application qui aide les étudiants étrangers dans leurs démarches administratives !</h1>
                    @if (Route::has('login'))
                        <livewire:welcome.studdle />
                    @endif
            </div>
        </div>
    </x-slot>

    <div class=" bg-dark-blue w-full">
        <div class="flex items-center max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
    
            <!--Photo de profil-->
            <img src="{{ asset('/images/exemple.jpg') }}" alt="avatar" class="block w-40 h-40 object-cover rounded border-blue ">
    
            <!--Contenu à droite de la photo-->
            <div class="flex flex-col items-center sm:items-start">
                <h1 class="mt-2 font-extrabold text-light-blue text-center text-2xl uppercase sm:text-left">L'application qui aide les étudiants étrangers dans leurs démarches administratives !</h1>
                <x-post-button class="bg-blue hover:bg-yellow hover:text-dark-blue mt-4">{{ __('Edit Profile') }}</x-post-button>
                <x-post-button class="bg-blue hover:bg-yellow hover:text-dark-blue mt-4">{{ __('Edit Profile') }}</x-post-button>
            </div>
    
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >

        <!-- Présentation -->
        <div class="text-center mb-14">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">Studdle, c'est quoi ?</h2>
            <p class="text-lg text-left mt-4 mb-8">Studdle est une plateforme dédiée aux jeunes universitaires étrangers venus étudier en Ile-de-France afin de les aider dans leurs démarches administratives. Si tu es un grand philanthrope, cette application est parfaite pour toi car nous aurons besoin de toi pour que tu proposes ton aide. 😉</p>
        </div>

        <!-- Fonctionnement -->
        <div class="text-center mb-8">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">Comment ça fonctionne ?</h2>

            <!-- Sans assistance -->
            <div>
                <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-4 mt-2 rounded-lg">Sans assistance</h2>
                <p class="text-lg text-left mt-4 mb-8">Un récapitulatif des aides administratives principales sous forme de fiches individuelles sont accessibles sans inscription. Ce récapitulatif permet de centraliser les informations d'habitude présentes sur plusieurs sites afin de permettre une navigation simplifiée en toute autonomie.</p>
            </div>

            <!-- Avec assistance -->
            <div>
                <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-4 rounded-lg">Avec assistance</h2>
                <p class="text-lg text-left mt-4 mb-8">'autre un espace réservé uniquement aux étudiants des Campus de l'Île-de-France pour créer de la proximité et t'aider dans tes démarches.</p>
            </div>

        </div>

        <!-- Etapes de fonctionnement -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-14">

            <!-- Etape 1 -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <div>
                    <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-blue w-10 h-10">
                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-blue">Etape 1 : Création du compte</h2>

                    <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                        Tout le monde peut se créer un compte : les étudiants qui font parti d'un des campus universitaires situés en Ile-de-France et toutes les personnes souhaitant les aider dans leur processus administratif.
                    </p>
                </div>
            </div>

            <!-- Etape 2 -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <div>
                    <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-blue w-10 h-10">
                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-blue">Etape 2 : Publication d'annonce</h2>

                    <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                        Après ton inscription, que tu demandes de l'aide ou que tu proposes de l'aide, une annonce sera automatiquement publiée pour informer les autres utilisateurs de tes intentions. Il te sera possible de publier d'autres annonces quand tu le voudras.
                    </p>
                </div>
            </div>

            <!-- Etape 3 -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <div>
                    <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-blue w-10 h-10">
                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-blue">Etape 3 : Mise en relation</h2>

                    <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                        L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                    </p>
                </div>
            </div>

        </div>

        <!-- Cible -->
        <div class="text-center mb-14">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">Studdle, destiné à qui ?</h2>
            <p class="text-lg text-left mt-4 mb-8">Tu t'es lancé dans l'aventure en faisant tes études en France et tu fais partie de l'une des universités d'Ile-de-France ?</p>
            <p class="text-lg text-left">Tu ne maîtrises pas bien la langue française et tu te perds dans tes démarches administratives ?</p>
        </div>

        <!-- En savoir plus -->
        <div class="text-center mb-8">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">Récapitulatif des aides</h2>
            <p class="text-lg text-left mt-4 mb-8">Retrouve ici les aides administratives principales en fonction de leur thématique.</p>
        </div>

        <!-- Liste des aides par thématique -->
        
        <div class="mb-8">
        <!-- Santé -->
        <x-help-dropdown>

            <x-slot name="trigger"> <!-- Contenu visible -->
                <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                    <span>Santé</span><!--Remplacer par label de la table tag-->

                        <div class="ms-1"> <!-- Flèche -->
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                </button>
            </x-slot>

            <x-slot name="content"> <!-- Liste déroulante des aides -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-4 p-6">
                        
                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Carte vitale</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Ameli</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                </div>
            </x-slot>

        </x-help-dropdown>
        </div>

        <div class="mb-8">
        <!-- Social -->
        <x-help-dropdown>

            <x-slot name="trigger"> <!-- Contenu visible -->
                <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                    <span>Social</span><!--Remplacer par label de la table tag-->

                        <div class="ms-1"> <!-- Flèche -->
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                </button>
            </x-slot>

            <x-slot name="content"> <!-- Liste déroulante des aides -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-4 p-6">
                        
                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">CAF</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                </div>
            </x-slot>

        </x-help-dropdown>
        </div>

        <div class="mb-8">
        <!-- Universitaire -->
        <x-help-dropdown>

            <x-slot name="trigger"> <!-- Contenu visible -->
                <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                    <span>Universitaire</span><!--Remplacer par label de la table tag-->

                        <div class="ms-1"> <!-- Flèche -->
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                </button>
            </x-slot>

            <x-slot name="content"> <!-- Liste déroulante des aides -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-4 p-6">
                        
                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Inscription universitaire</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                </div>
            </x-slot>

        </x-help-dropdown>
        </div>

        <div class="mb-8">
        <!-- Logement -->
        <x-help-dropdown>

            <x-slot name="trigger"> <!-- Contenu visible -->
                <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                    <span>Logement</span><!--Remplacer par label de la table tag-->

                        <div class="ms-1"> <!-- Flèche -->
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                </button>
            </x-slot>

            <x-slot name="content"> <!-- Liste déroulante des aides -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-4 p-6">
                        
                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Demande de logement</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Assurance habitation</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                </div>
            </x-slot>

        </x-help-dropdown>
        </div>

        <div class="mb-8">
        <!-- Finance -->
        <x-help-dropdown>

            <x-slot name="trigger"> <!-- Contenu visible -->
                <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                    <span>Finance</span><!--Remplacer par label de la table tag-->

                        <div class="ms-1"> <!-- Flèche -->
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                </button>
            </x-slot>

            <x-slot name="content"> <!-- Liste déroulante des aides -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-4 p-6">
                        
                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Ouvrir un compte bancaire</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                </div>
            </x-slot>

        </x-help-dropdown>
        </div>

        <div class="mb-14">
        <!-- Papiers -->
        <x-help-dropdown>

            <x-slot name="trigger"> <!-- Contenu visible -->
                <button class="flex w-full items-center justify-between p-4 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 focus:outline-none transition ease-in-out duration-200">
                    <span>Papiers</span><!--Remplacer par label de la table tag-->

                        <div class="ms-1"> <!-- Flèche -->
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                </button>
            </x-slot>

            <x-slot name="content"> <!-- Liste déroulante des aides -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-4 p-6">
                        
                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Demande de visa avant son arrivée</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Demande de renouvellement de visa</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                    <a href="https://laracasts.com" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/carte-vitale.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>

                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Acte de naissance</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                </div>
            </x-slot>

        </x-help-dropdown>
        </div>

    </div>

</x-home-layout>

