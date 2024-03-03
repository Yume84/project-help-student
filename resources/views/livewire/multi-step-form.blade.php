<form wire:submit="register">


@if ($currentStep ==1)

    <div class="bg-blue w-full h-6 border-blue rounded-lg mb-14">  
        <div class="bg-yellow h-5 rounded-lg w-0"></div>
    </div>

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">ÉTAPE 1/6 - Pourquoi es-tu ici ?</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 sm:gap-2 md:gap-8 pt-10 pb-10">
        
        <x-radio-input required wire:model="option" id="ask_help" class="block mt-1 w-full" type="radio" name="choice" :value="__('Ask for help')">
            {{ __('Ask for help') }}
        </x-radio-input>
            
        <x-radio-input required wire:model="option" id="offer_help" class="block mt-1 w-full" type="radio" name="choice" :value="__('Offer help')">
            {{ __('Offer help') }}
        </x-radio-input>

        <x-input-error :messages="$errors->get('option')" class="text-blue mt-2" />
        
    </div>

@endif


@if ($currentStep ==2)

    <div class="bg-blue w-full h-6 border-blue rounded-lg mb-14">  
        <div class="bg-yellow h-5 rounded-lg w-60"></div>
    </div>

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">ÉTAPE 2/6 - Pour quoi as-tu besoin d'aide/En quoi peux-tu aider ?</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 sm:gap-2 md:gap-8 pt-10 pb-10">
        
        <x-radio-input required wire:model="category" id="administration" class="block mt-1 w-full" type="radio" name="category" :value="__('Administration')">
            {{ __('Administration') }}
        </x-radio-input>

        <x-radio-input required wire:model="category" id="public_service" class="block mt-1 w-full" type="radio" name="category" :value="__('Public service')">
            {{ __('Public service') }}
        </x-radio-input>

        <x-radio-input required wire:model="category" id="both" class="block mt-1 w-full" type="radio" name="category" :value="__('Both')">
            {{ __('Both') }}
        </x-radio-input>

        <x-radio-input required wire:model="category" id="idk" class="block mt-1 w-full" type="radio" name="category" :value="__('I don\'t know')">
            {{ __('I don\'t know') }}
        </x-radio-input>

        <x-input-error :messages="$errors->get('category')" class="text-blue mt-2" />

    </div>

@endif

@if ($currentStep ==3)

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">STEP 3/4 - Coche les aides dont tu as besoin</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 sm:gap-2 md:gap-8 pt-10 pb-10">

        <x-checkbox-input required wire:model="helps" id="inscription" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Inscriptions')">
            {{ __('Inscriptions') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="bourse" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Demande de bourse')">
            {{ __('Demande de bourse') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="demande_visa" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Demande de visa')">
            {{ __('Demande de visa') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="renouvellement_visa" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Renouvellement de visa')">
            {{ __('Renouvellement de visa') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="caf" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('CAF')">
            {{ __('CAF') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="ameli" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Ameli')">
            {{ __('Ameli') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="carte_vitale" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Carte vitale')">
            {{ __('Carte vitale') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="compte_bancaire" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Ouverture d\'un compte bancaire')">
            {{ __('Ouverture d\'un compte bancaire') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="demande_logement" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Demande de logement')">
            {{ __('Demande delogement') }}
        </x-checkbox-input>

        <x-checkbox-input required wire:model="helps" id="assurance_habitation" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Assurance habitation')">
            {{ __('Assurance habitation') }}
        </x-checkbox-input>
        
        <x-checkbox-input required wire:model="helps" id="other" class="block mt-1 w-full" type="checkbox" name="helps" :value="__('Other')">
            {{ __('Other') }}
        </x-checkbox-input>

        <x-input-error :messages="$errors->get('helps')" class="text-blue mt-2" />

    </div>

@endif

@if ($currentStep ==4)

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">STEP 4/6 - Quelle(s) langue(s) parles-tu ?</h3>
        
    <select name="list_language" id="list_language" wire:model="liste_langue">
        <option value="" selected>Sélectionne ta langue</option>
        <option value="a1">Français</option>
        <option value="a2">Anglais</option>
        <option value="b1">Espagnol</option>
        <option value="c1">Allemand</option>
    </select>

    <x-input-error :messages="$errors->get('language')" class="mt-2" /> <!-- A définir car tu l'avais pas mis-->


    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">Quel est ton niveau de français ?</h3>

    <select name="list_level" id="list_level" wire:model="level">
        <option value="" selected>Sélectionne ton niveau</option>
        <option value="a1">A1 : Je débute</option>
        <option value="a2">A2 : Je comprends quelques mots</option>
        <option value="b1">B1-B2 : Je peux communiquer</option>
        <option value="c1">C1-C2 : Je suis à l'aise</option>
    </select>
    
    <x-input-error :messages="$errors->get('level')" class="text-blue mt-2" />

@endif

@if ($currentStep ==5)

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">STEP 5/6 - Où étudies-tu ?</h3>

    <select wire:model="college" name="list_college" id="list_college">
        <option value="" selected>Sélectionne ton campus</option>
        <option value="1">Université Gustave Eiffel</option>
        <option value="2">Sorbonne Université</option>
        <option value="3">Paris 8</option>
        <option value="4">UPEC</option>
    </select>

    <x-input-error :messages="$errors->get('college')" class="text-blue mt-2" />

@endif

@if ($currentStep ==6)

    <h3 class="text-3xl text-blue uppercase font-extrabold text-center">STEP 6/6 - C'est la dernière étape !</h3>

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

        <div class="checkbox">
            <input id="rgpd" type="checkbox" required wire:model="rgpd"/>
            <label for="rgpd" class="rgpd">J'accepte les <a href="#" class="rgpd" onclick="openPopup()">conditions d'utilisation</a></label>

            <x-input-error :messages="$errors->get('rgpd')" class="text-blue mt-2" />
        </div>

    </div>

@endif

<!-- Step by step -->

    <div class="flex justify-between pt-2 pb-2">

    @if ($currentStep ==1)
        <div></div>
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

