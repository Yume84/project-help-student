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

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >

        <!-- Présentation -->
        <div class="text-center mb-14">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-3 mb-4 ">Studdle, c'est quoi ?</h2>
            <p class="text-lg text-left mt-4 mb-8">Studdle est une plateforme dédiée aux jeunes universitaires étrangers venus étudier en France afin de les aider dans leurs démarches administratives. Mais ce n'est pas tout ! Si tu es un grand philanthrope, il est également possible que tu proposes ton aide. 😉</p>
        </div>

        <!-- Fonctionnement -->
        <div class="text-center mb-14">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-3 mb-4 ">Comment ça fonctionne ?</h2>

            <!-- Sans assistance -->
            <div>
                <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-2 mb-4 ">Sans assistance</h2>
                <p class="text-lg text-left mt-4 mb-8">Un récapitulatif des aides administratives principales sous forme de fiches individuelles sont accessibles sans inscription. Ce récapitulatif permet de centraliser les informations d'habitude présentes sur plusieurs sites afin de permettre une navigation simplifiée en toute autonomie.</p>
            </div>

            <!-- Avec assistance -->
            <div>
                <h2 class="inline-block font-bold uppercase text-light-blue text-xl bg-blue border-blue p-2 mb-4 ">Avec assistance</h2>
                <p class="text-lg text-left mt-4 mb-8">'autre un espace réservé uniquement aux étudiants des Campus de l'Île-de-France pour créer de la proximité et t'aider dans tes démarches.</p>
            </div>

        </div>

        <!-- Cible -->
        <div class="text-center mb-14">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-3 mb-4 ">Destiné à qui ?</h2>
            <p class="text-lg text-left mt-4 mb-8">Tu t'es lancé dans l'aventure en faisant tes études en France et tu fais partie de l'une des universités d'Ile-de-France ?</p>
            <p class="text-lg text-left">Tu ne maîtrises pas bien la langue française et tu te perds dans tes démarches administratives ?</p>
        </div>

        <!-- Etapes de fonctionnement -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <div class="p-6 bg-light-blue rounded-lg shadow-2xl shadow-gray-500/20">
                <div>
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Etape 1 : </h2>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                    </p>
                </div>
            </div>

            <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>

            <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>

        </div>

    </div>

</x-home-layout>

