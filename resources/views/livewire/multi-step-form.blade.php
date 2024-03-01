<div>
    <form wire:submit.prevent="register">

    @if ($currentStep ==1)

        <h3 class="text-3xl text-blue uppercase font-extrabold text-center">ÉTAPE 1/6 - Pourquoi es-tu ici ?</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:gap-2 md:gap-8 p-6">
            
            <div class="mt-4">
                <x-option-input required wire:model="option" id="ask_help" class="block mt-1 w-full" type="radio" name="choice" :value="__('Ask for help')">
                    {{ __('Ask for help') }}
                </x-option-input>
                <x-input-error :messages="$errors->get('option')" class="mt-2" />
            </div>
            
            <div class="mt-4">
                <x-option-input required wire:model="option" id="offer_help" class="block mt-1 w-full" type="radio" name="choice">
                    {{ __('Offer help') }}
                </x-option-input>
                <x-input-error :messages="$errors->get('option')" class="mt-2" />
            </div>
            
        </div>

    @endif


@if ($currentStep ==2)
       
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 2/4 - Categories</div>
                <div class="card-body">
                    <h3>Pour quoi as-tu besoin d'aide/En quoi peux-tu aider ?</h3>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="administration" class="category">Administration scolaire</label>
                                <input type="radio" class="form-control" id="administration" name="category" value="administration" wire:model="category">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="service_public" class="category">Service public</label>
                                <input type="radio" class="form-control" id="service_public" name="category" value="service_public" wire:model="category">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="both" class="category">Les deux</label>
                                <input type="radio" class="form-control" id="both" name="category" value="both" wire:model="category">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                <br>
                                <label for="idk" class="category">Service public</label>
                                <input type="radio" class="form-control" id="idk" name="category" value="idk" wire:model="category">
                                <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>

@endif

@if ($currentStep ==3)


<div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 3/4 - Helps</div>
                <div class="card-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h3>Coche les aides dont tu as besoin : </h3>
                                <div class="helps d-flex flex-column align-items-left mt-2">
                                    <label for="inscription">
                                        <input type="checkbox" id="inscription" value="inscription" wire:model="helps"/>Inscriptions
                                    </label>
                                    <label for="bourse">
                                        <input type="checkbox" id="bourse" value="bourse" wire:model="helps"/>Demande de bourse
                                    </label>
                                    <label for="autre">
                                        <input type="checkbox" id="autre" value="autre" wire:model="helps"/>Autre
                                    </label>
                                    <label for="visa">
                                        <input type="checkbox" id="visa" value="visa" wire:model="helps"/>Renouvellement de visa
                                    </label>
                                    <label for="caf">
                                        <input type="checkbox" id="caf" value="caf" wire:model="helps"/>CAF
                                    </label>
                                    <label for="ameli">
                                        <input type="checkbox" id="ameli" value="ameli" wire:model="helps"/>Ameli
                                    </label>
                                    <label for="carte_vitale">
                                        <input type="checkbox" id="carte_vitale" value="carte_vitale" wire:model="helps"/>Carte vitale
                                    </label>
                                    <label for="compte_bancaire">
                                        <input type="checkbox" id="compte_bancaire" value="compte_bancaire" wire:model="helps"/>Ouverture d'un compte bancaire
                                    </label>
                                    <label for="demande_logement">
                                        <input type="checkbox" id="demande_logement" value="demande_logement" wire:model="helps"/>Demande de logement
                                    </label>
                                    <label for="assurance_logement">
                                        <input type="checkbox" id="assurance_logement" value="assurance_logement" wire:model="helps"/>Assurance logement
                                    </label>
                                </div>
                                <span class="text-danger">@error('helps'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            @endif

            @if ($currentStep ==4)

            <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 4/ - Langues & niveaux</div>
                <div class="card-body">
            <h3>Quelle(s) langue(s) parles-tu ?</h3>
            <div class="language">
                <select name="liste_language" id="liste_language" wire:model="liste_langue">
                <option value="" selected>Select langue</option>
                <option value="a1">Français</option>
                <option value="a2">Anglais</option>
                <option value="b1">Espagnol</option>
                <option value="c1">Allemand</option>

    </select>
</div>

                <h3>Qeul est ton niveau de français ?</h3>
                <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" wire:model="level">
                                    <option value="" selected>Select level</option>
                                    <option value="a1">A1 : Je débute</option>
                                    <option value="a2">A2 : Je comprends quelques mots</option>
                                    <option value="b1">B1-B2 : Je peux communiquer</option>
                                    <option value="c1">C1-C2 : Je suis à l'aise</option>
                                </select>
                                <span class="text-danger">@error('level'){{ $message }}@enderror</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        @endif

        @if ($currentStep ==5)

        <div class="step-five">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 5/6 - Université</div>
                <h3>Où étudies-tu ?</h3>
                            <div class="college">
                                <select wire:model="college" name="liste_college" id="liste_college">
                                    <option value="" selected>Select college</option>
                                    <option value="1">Université Gustave Eiffel</option>
                                    <option value="2">Sorbonne Université</option>
                                    <option value="3">Paris 8</option>
                                    <option value="4">UPEC</option>
                                </select>
                            <span class="text-danger">@error('college'){{ $message }}@enderror</span>
                            </div>
            </div>
        </div>

        @endif

        @if ($currentStep ==6)

        <div class="step-six">
            <div class="card">
                <div class="card-header bg-secondary text-black">STEP 6/6 - INFOS PERSONNELLES</div>
        <h3>C'est la dernière étape !</h3>
     <!-- Name -->
     <div class="mt-4">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Pseudo -->
    <div class="mt-4">
        <x-input-label for="pseudo" :value="__('Pseudo')" />
        <x-text-input wire:model="pseudo" id="pseudo" class="block mt-1 w-full" type="text" name="pseudo" required autofocus autocomplete="pseudo" />
        <x-input-error :messages="$errors->get('pseudo')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
  <div class="checkbox">
    <input id="rgpd" type="checkbox" class="checkbox" wire:model="rgpd"/>
    <label for="rgpd" class="rgpd">J'accepte les <a href="#" class="rgpd" onclick="openPopup()">conditions d'utilisation</a></label>
    <span class="text-danger">@error('password_confirm'){{ $message }}@enderror</span>
  </div>
  @endif

        <div class="flex justify-between bg-blue pt-2 pb-2">

        @if ($currentStep ==1)
            <div></div>
        @endif

        @if ($currentStep ==2 || $currentStep ==3 || $currentStep ==4 || $currentStep ==5 || $currentStep ==6)
           <div> <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button></div>
        @endif

        @if ($currentStep ==1 || $currentStep ==2 || $currentStep ==3 || $currentStep ==4 || $currentStep ==5)
            <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
        @endif

        @if ($currentStep ==6)
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
        @endif
    </form>
</div>

