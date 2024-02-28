<x-home-layout>
    <!-- Header / Page de couverture -->

    <x-slot name="header">
        <!-- Contenu principal -->
        <div class="flex flex-col sm:flex-row items-center justify-center w-full">
            <!-- Logo -->
            <x-studdle-logo :href="route('home')" class="w-80 h-80 object-cover w-auto text-light-blue mb-4 sm:mb-0 sm:mr-6"></x-studdle-logo>                         
                        
            <!-- Contenu à droite de la photo -->
            <div class="flex flex-col items-center sm:items-start">
                <span class="mt-2 font-extrabold text-light-blue text-center sm:text-left">L'application qui aide les étudiants étrangers dans leurs démarches administratives !</span>
                    @if (Route::has('login'))
                        <livewire:welcome.studdle />
                    @endif
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >

        <!-- Présentation -->
        <div class="text-center">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue p-3 mb-4 ">Studdle, c'est quoi ?</h2>
            <p class="text-lg text-left mb-8">Studdle est une plateforme dédiée aux jeunes universitaires étrangers venus étudier en France afin de les aider dans leurs démarches administratives. Mais ce n'est pas tout ! Si tu es un grand philanthrope, il est également possible que tu proposes ton aide. 😉</p>
        </div>

        <!-- Présentation -->
        <div class="text-center">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue p-3 mb-4 ">Comment ça fonctionne ?</h2>
            <div>
                <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-blue p-3 mb-4 ">Comment ça fonctionne ?</h2>
            </div>
            <p class="text-lg text-left mb-8">Tu trouveras deux espaces : l'un libre d'accès composé de fiches pour mieux t'y retrouver, et de l'autre un espace réservé uniquement aux étudiants des Campus de l'Île-de-France pour créer de la proximité et t'aider dans tes démarches.</p>
        </div>

        <!-- Cible -->
        <div class="text-center">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue p-3 mb-4 ">Destiné à qui ?</h2>
            <p class="text-lg text-left mb-8">Tu t'es lancé dans l'aventure en faisant tes études en France et tu fais partie de l'une des universités d'Ile-de-France ?</p>
            <p class="text-lg text-left">Tu ne maîtrises pas bien la langue française et tu te perds dans tes démarches administratives ?</p>
        </div>

    </div>

</x-home-layout>

