<x-home-layout>
    <!--Couverture-->
    <div class="bg-dark-blue w-full">
        <div class="flex items-center h-auto max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">

            <!-- Photo de profil -->
            <x-studdle-logo :href="route('home')" class="block w-80 h-80 object-cover w-auto text-light-blue"></x-studdle-logo>                         
            
            <!-- Contenu à droite de la photo -->
            <div class="ml-10 flex sm:flex-row sm:items-center flex-grow">
                
                <div>
                    <span class="mt-2 font-extrabold text-light-blue">L'application qui aide les étudiants étrangers dans leurs démarches administratives !</span>
                    @if (Route::has('login'))
                        <livewire:welcome.studdle />
                    @endif
                </div>

            </div>
    </div>
</x-home-layout>
