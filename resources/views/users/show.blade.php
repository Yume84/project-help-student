<x-admin-layout>

    <!--Couverture-->
    <div class="bg-dark-blue w-full h-60">
        <div class="flex items-center max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
    
            <!-- Photo de profil -->
            <img src="{{ asset('/images/exemple.jpg') }}" alt="avatar" class="block w-40 h-40 object-cover rounded border-blue">
    
            <!-- Contenu à droite de la photo -->
            <div class="ml-10 flex flex-col sm:flex-row sm:items-center flex-grow">
                <div>
                    <div class="text-blue">{{ $user->pseudo }}</div>
                    @php
                        $college_name = \App\Models\College::find($user->college_id)->name;
                    @endphp
                    <span class="mt-2 text-light-blue">{{ $college_name }}</span>                </div>
    
                <!-- Bouton "Modifier le profil" -->
                @auth
                    @if(auth()->user()->pseudo === $user->pseudo)
                        <div class="sm:ml-auto">
                            <a href="{{ route('edit-profile') }}" class="bg-blue hover:bg-yellow hover:text-dark-blue inline-flex items-center mt-4 px-4 py-2 bg-dark-blue border border-transparent rounded-md font-semibold text-xs text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150">{{ __('Edit Profile') }}</a>
                        </div>
                    @endif
                @endauth
        </div>
    </div>
    
    <div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
        <livewire:posts.list />
    </div>
    
    </x-admin-layout>