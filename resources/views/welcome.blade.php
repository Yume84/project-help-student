<x-home-layout>
    <!-- Header / Page de couverture -->

    <x-slot name="header">
        <!-- Contenu principal -->

        <!-- Logo -->
        <img src="{{ asset('/images/logo/mascotte.png') }}" alt="studdle-mascotte" class="block w-80 h-full">
    
        <!-- Informations -->
        <div class="flex flex-col items-center sm:items-start mt-6 gap-2 sm:ml-14">
            <h1 class="font-extrabold text-light-blue text-center text-2xl uppercase sm:text-left mb-8">L'application qui aide les étudiants étrangers dans leurs démarches administratives !</h1>
                @if (Route::has('login'))
                    <livewire:welcome.studdle />
                @endif
        </div>
    
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <!-- Présentation -->
        <div class="text-center mb-14">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">Studdle, c'est quoi ?</h2>
            <p class="text-lg text-left mt-4 mb-8">L'administration française peut sembler complexe : les aides sont réparties sur plusieurs plateformes et même les Français ne connaissent pas toujours toutes les aides dont ils peuvent disposer. </p>
            <p class="text-lg text-left mt-4 mb-8">Un étudiant étranger qui arrive en France doit, non seulement s'habituer à un nouvel environnement, mais il doit aussi gérer toutes les démarches administratives, tout en surmontant la barrière de la langue et de la compréhension.</p>
            <p class="text-lg text-left mt-4 mb-4">Studdle est donc LA solution qui aide et accompagne les jeunes universitaires étrangers venus étudier en Ile-de-France dans leurs démarches administratives.</p>
        </div>
        
        <!-- Avantages -->
        <div class="text-center mb-4">
            <h2 class="inline-block text-center font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-4 mt-2 rounded-lg">Les avantages</h2>
        </div>

        <!-- 3 avantages -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-14">

            <!-- Simplicité -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <div>
                    <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-blue w-10 h-10">
                            <path d="M11.25 5.337c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.036 1.007-1.875 2.25-1.875S15 2.34 15 3.375c0 .369-.128.713-.349 1.003-.215.283-.401.604-.401.959 0 .332.278.598.61.578 1.91-.114 3.79-.342 5.632-.676a.75.75 0 0 1 .878.645 49.17 49.17 0 0 1 .376 5.452.657.657 0 0 1-.66.664c-.354 0-.675-.186-.958-.401a1.647 1.647 0 0 0-1.003-.349c-1.035 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401.31 0 .557.262.534.571a48.774 48.774 0 0 1-.595 4.845.75.75 0 0 1-.61.61c-1.82.317-3.673.533-5.555.642a.58.58 0 0 1-.611-.581c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.035-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959a.641.641 0 0 1-.658.643 49.118 49.118 0 0 1-4.708-.36.75.75 0 0 1-.645-.878c.293-1.614.504-3.257.629-4.924A.53.53 0 0 0 5.337 15c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.036 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.369 0 .713.128 1.003.349.283.215.604.401.959.401a.656.656 0 0 0 .659-.663 47.703 47.703 0 0 0-.31-4.82.75.75 0 0 1 .83-.832c1.343.155 2.703.254 4.077.294a.64.64 0 0 0 .657-.642Z" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-blue">Simplicité</h2>

                    <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                        Studdle simplifie les démarches administratives en regroupant les différentes aides sur une seule plateforme, facilitant ainsi l'accès aux informations essentielles pour les étudiants étrangers.
                    </p>
                </div>
            </div>

            <!-- Accompagnement -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <div>
                    <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-blue w-10 h-10">
                            <path fill-rule="evenodd" d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-blue">Accompagnement</h2>

                    <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                        Studdle accompagne et offre un soutien précieux dans un nouvel environnement où la barrière linguistique et le manque d'information peut être un obstacle.                
                    </p>
                </div>
            </div>

            <!-- Engagement communautaire -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <div>
                    <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-blue w-10 h-10">
                            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                            <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-blue">Engagement communautaire</h2>

                    <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                        Studdle encourage le partage et l'entraide entre étudiants, créant ainsi une communauté solidaire où chacun peut contribuer et bénéficier de l'aide des autres, favorisant ainsi un esprit de collaboration et de générosité.
                    </p>
                </div>
            </div>

        </div>

        <!-- Cible -->
        <div class="text-center mb-4">
            <h2 class="inline-block text-center font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-4 mt-2 rounded-lg">Qui sont les destinataires ?</h2>
        </div>

        <!-- 2 cibles -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 mb-24">

            <!-- Simplicité -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <h2 class="text-xl font-semibold text-blue">Jeunes étudiants étrangers</h2>
                <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                    Tu t'es lancé dans l'aventure en faisant tes études en France et tu fais partie de l'une des universités d'Ile-de-France ?
                </p>
            </div>

            <!-- Philanthropes -->
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <h2 class="text-xl font-semibold text-blue">Philanthropes</h2>
                <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                    Si tu es un grand philanthrope, cette application est parfaite pour toi car nous aurons besoin de toi pour que tu proposes ton aide.
                </p>
            </div>

        </div>

        <!-- Fonctionnement -->
        <div class="text-center mb-8">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">Comment ça fonctionne ?</h2>

            <!-- Sans assistance -->
            <div>
                <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-4 mt-2 rounded-lg">Sans assistance</h2>
                <p class="text-lg text-left mt-4 mb-8">Un récapitulatif des aides administratives principales sous forme de fiches individuelles est accessible sans inscription.<br> Ce récapitulatif permet de centraliser les informations d'habitude présentes sur plusieurs sites afin de permettre une navigation simplifiée en toute autonomie.</p>
            </div>

            <!-- Avec assistance -->
            <div>
                <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-1 mb-4 rounded-lg">Avec assistance</h2>
                <p class="text-lg text-left mt-4 mb-8">L'espace communautaire pour demander ou proposer de l'aide est disponible à condition de créer ton espace personnel.</p>
            </div>

        </div>

        <!-- Etapes de fonctionnement -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-24">

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
                            <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875ZM12.75 12a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V18a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V12Z" clip-rule="evenodd" />
                            <path d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
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
                            <path d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                            <path d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                          </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-blue">Etape 3 : Mise en relation</h2>

                    <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                        L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                    </p>
                </div>
            </div>

        </div>

        <!-- Récapitulatif des aides -->
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
                        
                    <a href="{{ route('articles.show', App\Models\Article::find(1)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline">
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

                    <a href="{{ route('articles.show', App\Models\Article::find(8)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
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
                        
                    <a href="{{ route('articles.show', App\Models\Article::find(7)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
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
                        
                    <a href="{{ route('articles.show', App\Models\Article::find(9)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
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
                        
                    <a href="{{ route('articles.show', App\Models\Article::find(2)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/logement.png') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>
                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Demande de logement</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                    <a href="{{ route('articles.show', App\Models\Article::find(10)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
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
                        
                    <a href="{{ route('articles.show', App\Models\Article::find(6)?->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
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
                        
                    <a href="{{ route('articles.show', App\Models\Article::find(3)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/visa.jpeg') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>
                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Demande de visa avant son arrivée</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                    <a href="{{ route('articles.show', App\Models\Article::find(4)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/visa.jpeg') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>
                            </div>
            
                            <h2 class="mt-6 text-xl font-semibold text-blue">Demande de renouvellement de visa</h2><!--Remprendre BDD-->
            
                            <p class="mt-4 text-dark-blue text-sm leading-relaxed">
                                L'application se base sur le bon vouloir de chacun. Des volontaires répondront à ton annonce dans les meilleurs délais grâce à un système de messagerie privée !
                            </p>
                        </div>
                    </a>

                    <a href="{{ route('articles.show', App\Models\Article::find(5)->slug) }}" class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20 bg-white flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline"><!--Remplacer par la route-->
                        <div>
                            <div class="h-30 w-full bg-white flex items-center justify-center">
                                <img src="{{ asset('images/aide/visa-2.jpg') }}" alt="Logo_Studdle" class="h-30 w-full object-cover"/>
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