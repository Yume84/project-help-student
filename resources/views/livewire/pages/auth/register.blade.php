<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'name' => '',
    'pseudo' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => ''
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'pseudo' => ['required', 'string', 'max:50', 'unique:'.User::class],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    $this->redirect(RouteServiceProvider::HOME, navigate: true);
};

?>

<script src="{{ asset('ressources/js/register.js') }}"></script>

<div>
    <form wire:submit="register">

        <!-- Status -->
    <div class="container">
        <div class="mt-4"> <h3>Pourquoi es-tu ici ?</h3>
            <div class="flex items-center justify-between mt-4">
            <x-post-button onclick="askForHelp()"> {{ __('Ask for help') }} </x-post-button>
<x-post-button onclick="offerHelp()"> {{ __('Offer help') }} </x-post-button>
            </div>
        </div>
    </div>

     <!-- Category -->
     <div class="container">
        <div class="mt-4"> <h3>Pourquoi as-tu besoin d'aide ?</h3>
            <div class="flex items-center justify-between mt-4">
                <x-post-button> <!--Ajouter href-->
                    {{ __('Administration scolaire') }}
                </x-post-button>
                    
                <x-post-button> <!--Ajouter href-->
                    {{ __('Services publics') }}
                </x-post-button>

                <x-post-button> <!--Ajouter href-->
                    {{ __('Les deux') }}
                </x-post-button>

                <x-post-button> <!--Ajouter href-->
                    {{ __('Je ne sais pas') }}
                </x-post-button>
            </div>
        </div>
    </div>

    <div class="liste" id="deux">
  <h3 id="liste-text">Coche les aides dont tu as besoin :</h3>
  <button class="coche" id="inscriptions" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_inscriptions">Inscriptions</button>
  <button class="coche" id="bourse" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_bourse">Demande de bourse</button>
  <button class="coche" id="caf" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_caf">CAF</button>
  <button class="coche" id="ameli" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_ameli">Ameli</button>
  <button class="coche" id="sejour" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_sejour">Permis de séjour</button>
  <button class="coche" id="autres" onclick="toggleCocherAide(this)"><input type="checkbox" id="check_autres">Autres</button>
</div>

<h3>Quelle(s) langue(s) parles-tu ?</h3>
<div class="choix">
  <button class="langue" onclick="toggleListeLangue(this)">Sélectionne ta / tes langue(s)<img src="images/icone/arrow.png" alt="arrow" class="arrow"></button>
</div>

<div class="liste menu-langue" id="langue">
    <button class="coche" id="france" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_france"><img src="images/drapeau/france.png" alt="FR" class="drapeau">Français</button>
    <button class="coche" id="royaume-uni" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_royaume-uni"><img src="images/drapeau/royaume-uni.png" alt="EN" class="drapeau">Anglais</button>
    <button class="coche" id="allemagne" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_allemagne"><img src="images/drapeau/allemagne.png" alt="DE" class="drapeau">Allemand</button>
    <button class="coche" id="espagne" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_espagne"><img src="images/drapeau/espagne.png" alt="ES" class="drapeau">Espagnol</button>
    <button class="coche" id="italie" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_italie"><img src="images/drapeau/italie.png" alt="IT" class="drapeau">Italien</button>
    <button class="coche" id="coree-du-sud" onclick="toggleCocherLangue(this)"><input type="checkbox" id="check_coree-du-sud"><img src="images/drapeau/coree-du-sud.png" alt="KR" class="drapeau">Coréen</button>
</div>

<h3>Quel est ton niveau de langue ?</h3>
<div class="choix">
  <select name="level" id="level">
    <option value="default">Sélectionne un niveau</option>
    A1 : Je débute
  <input type="select" name="level" value="a2">A2 : Je comprends quelques mots
  <input type="select" name="level" value="b1">B1-B2 : Je peux communiquer
  <input type="select" name="level" value="c1">C1-C2 : Je suis à l'aise
</div>

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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-post-button class="ms-4">
                {{ __('Register') }}
            </x-post-button>
        </div>
    </form>
</div>
