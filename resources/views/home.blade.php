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
        <div class="bg-blue h-16">

salut
        </div>
    </div>

</x-home-layout>

