<form wire:submit="register">
    
@if ($currentStep ==1)

    <div class="mx-auto flex flex-col items-center justify-center" >

        <h3 class="text-4xl text-blue font-extrabold uppercase mb-10">Bienvenue</h3>

        <a href="{{ route('welcome') }}">
            <img src="images/logo/mascotte.png" alt="Logo_Studdle" class="inline-block step-1"/>
        </a> 

        <h3 class="text-2xl text-light-blue font-extrabold uppercase mt-10 mb-20">Démarrons ton inscription !</h3>

    </div>

@endif


@if ($currentStep ==2)

    <div class="flex flex-col justify-center items-center">
        <x-studdle-mascotte :href="route('welcome')" class="block step mb-4"></x-studdle-mascotte>
    </div>

    <div class="bg-blue w-full h-6 border-blue rounded-lg mb-14">  
        <div class="bg-yellow h-5 rounded-lg remplissage-1"></div>
    </div>

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">Pourquoi es-tu ici ?</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 sm:gap-2 md:gap-8 pt-10 pb-10">
        
        <x-radio-input required wire:model="option" id="ask_help" class="block mt-1 w-full" type="radio" name="choice" :value="__('Ask for help')">
            {{ __('Ask for help') }}
        </x-radio-input>
            
        <x-radio-input required wire:model="option" id="offer_help" class="block mt-1 w-full" type="radio" name="choice" :value="__('Offer help')">
            {{ __('Offer help') }}
        </x-radio-input>

        <x-input-error :messages="$errors->get('option')" class="text-blue" />
        
    </div>

@endif

@if ($currentStep ==3)

    <div class="flex flex-col justify-center items-center">
        <x-studdle-mascotte :href="route('welcome')" class="block step mb-4"></x-studdle-mascotte>
    </div>

    <div class="bg-blue w-full h-6 border-blue rounded-lg mb-14">  
        <div class="bg-yellow h-5 rounded-lg remplissage-2"></div>
    </div>

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">Coche les aides dont tu as besoin</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 sm:gap-2 md:gap-8 pt-10 pb-10">

        @foreach($articles as $article)
            <x-checkbox-input required wire:model="helps" id="{{$article->title}}" class="block mt-1 w-full" type="checkbox" name="helps" :value="$article->id">
                {{ __($article->title) }}
            </x-checkbox-input>
        @endforeach 

        <x-input-error :messages="$errors->get('helps')" class="text-blue" />

    </div>

@endif

@if ($currentStep ==4)

    <div class="flex flex-col justify-center items-center mb-10">

        <x-studdle-mascotte :href="route('welcome')" class="block step mb-4"></x-studdle-mascotte>

        <div class="bg-blue w-full h-6 border-blue rounded-lg mb-14">  
            <div class="bg-yellow h-5 rounded-lg remplissage-3"></div>
        </div>

        <div class="grid grid-cols-1 pb-10">

            <h3 class="text-3xl text-blue uppercase font-extrabold text-center">Quelle(s) langue(s) parles-tu ?</h3>

            <x-select name="list_language" id="list_language" wire:model="list_language">
                <option value="default">Sélectionne une option</option>
                @foreach($languages as $language)
                    <option value="{{ $language->id }}">{{ $language->label }}</option>
                @endforeach
            </x-select>
                
            <x-input-error :messages="$errors->get('list_language')" class="text-blue" />

            <h3 class="text-3xl text-blue uppercase font-extrabold text-center mt-8">Quel est ton niveau de français ?</h3>

            <x-select name="list_level" id="list_level" wire:model="level">
                <option value="" selected>Sélectionne ton niveau</option>
                <option value="A1">A1 : Je débute</option>
                <option value="A2">A2 : Je comprends quelques mots</option>
                <option value="B1-B2">B1-B2 : Je peux communiquer</option>
                <option value="C1-C2">C1-C2 : Je suis à l'aise</option>
            </x-select>
            
            <x-input-error :messages="$errors->get('level')" class="text-blue" />

        </div>

    </div>

@endif

@if ($currentStep ==5)

    <div class="flex flex-col justify-center items-center">
        <x-studdle-mascotte :href="route('welcome')" class="block step mb-4"></x-studdle-mascotte>
    </div>

    <div class="bg-blue w-full h-6 border-blue rounded-lg mb-14">  
        <div class="bg-yellow h-5 rounded-lg remplissage-4"></div>
    </div>

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">Où étudies-tu ?</h3>

    <div class="grid grid-cols-1 sm:gap-2 md:gap-8 pb-10">
        <x-select name="list_college" id="list_college" wire:model="college">
            <option value="default">Sélectionne un campus</option>
            @foreach($colleges->sortBy('name') as $college)
                <option value="{{ $college->id }}">{{ $college->name }}</option>
            @endforeach
        </x-select>

        <x-input-error :messages="$errors->get('college')" class="text-blue" />
    </div>

@endif

@if ($currentStep ==6)

    <div class="flex flex-col justify-center items-center">
        <x-studdle-mascotte :href="route('welcome')" class="block step mb-4"></x-studdle-mascotte>
    </div>

    <div class="bg-blue w-full h-6 border-blue rounded-lg mb-14">  
        <div class="bg-yellow h-5 rounded-lg remplissage-5"></div>
    </div>

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">C'est la dernière étape !</h3>

    <div class="mx-auto max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ombre-blue mt-10 mb-10">

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="text-blue mt-2" />
        </div>

        <!-- Pseudo -->
        <div class="mt-4">
            <x-input-label for="pseudo" :value="__('Pseudo')" />
            <x-text-input wire:model="pseudo" id="pseudo" class="block mt-1 w-full" type="text" name="pseudo" required autofocus autocomplete="pseudo" />
            <x-input-error :messages="$errors->get('pseudo')" class="text-blue mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="text-blue mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="text-blue mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="text-blue mt-2" />
        </div>

        <div class="mt-4 mb-4">
            <input id="rgpd" type="checkbox" class="rounded" wire:model="rgpd"/>
            <label for="rgpd" class="rgpd">J'accepte les <a href="#" class="rgpd" onclick="openPopup()">conditions d'utilisation</a></label>

            <x-input-error :messages="$errors->get('rgpd')" class="text-blue mt-2" />
        </div>

    </div>

@endif

<!-- Step by step -->

    <div class="flex justify-between pt-2 pb-10">

    @if ($currentStep ==1)
        <x-register-button type="button">
            <a href="{{ route('welcome') }}">
                {{ __('Back') }}
            </a>
        </x-register-button>
    @endif

    @if ($currentStep ==2 || $currentStep ==3 || $currentStep ==4 || $currentStep ==5 || $currentStep ==6)
        <x-register-button type="button" wire:click="decreaseStep()">
            {{ __('Back') }}
        </x-register-button>
    @endif

    @if ($currentStep ==1 || $currentStep ==2 || $currentStep ==3 || $currentStep ==4 || $currentStep ==5)
        <x-register-button type="button" wire:click="increaseStep()">
            {{ __('Next') }}
        </x-register-button>
    @endif

    @if ($currentStep ==6)
        <x-register-button type="submit">
            {{ __('Register') }}
        </x-register-button>
    @endif

</form>
