<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\LanguageController;
use App\Models\Language;


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

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<form action="{{ route('tester-formulaire') }}" method="POST" id="formulaireChoix">
    @csrf

    <h3>Choisissez une option :</h3>

    <div class="choix-options">
        <input type="radio" id="demanderAide" name="choix" value="demanderAide" required>
        <label for="demanderAide" class="option">
            <div class="option-titre">Demander de l'aide</div>
        </label>

        <input type="radio" id="proposerAide" name="choix" value="proposerAide" required>
        <label for="proposerAide" class="option">
            <div class="option-titre">Proposer son aide</div>
        </label>
    </div>
</br>
</br>
    <div id="sectionDemanderAide" class="section-question">
        <!-- Les questions spécifiques pour "Demander de l'aide" -->
        <label for="raisonAide">Pour quoi as-tu besoin d'aide ?</label>

<div class="choix-categories">
    <input type="radio" id="inscription" name="categorie" value="inscription" required>
    <label for="inscription" class="option">
        <div class="option-titre">Inscriptions administratives</div>
    </label>

    <input type="radio" id="service" name="categorie" value="service" required>
    <label for="service" class="option">
        <div class="option-titre">Service public</div>
    </label>

    <input type="radio" id="both" name="categorie" value="both" required>
    <label for="both" class="option">
        <div class="option-titre">Les deux</div>
    </label>

    <input type="radio" id="idk" name="categorie" value="idk" required>
    <label for="idk" class="option">
        <div class="option-titre">Je ne sais pas</div>
    </label>
</div>    </div>

    <div id="sectionProposerAide" class="section-question">
        <!-- Les questions spécifiques pour "Proposer son aide" -->
        <label for="domaineAide">En quoi peux-tu aider ?</label>

        <div class="choix-categories">
    <input type="radio" id="inscription2" name="categorie2" value="inscription2" required>
    <label for="inscription2" class="option">
        <div class="option-titre">Inscriptions administratives</div>
    </label>

    <input type="radio" id="service2" name="categorie2" value="service2" required>
    <label for="service2" class="option">
        <div class="option-titre">Service public</div>
    </label>

    <input type="radio" id="both2" name="categorie2" value="both2" required>
    <label for="both2" class="option">
        <div class="option-titre">Les deux</div>
    </label>

    <input type="radio" id="idk2" name="categorie2" value="idk2" required>
    <label for="idk2" class="option">
        <div class="option-titre">Je ne sais pas</div>
    </label>
</div>    </div>

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


<!-- Ajoutez ceci à la section script de votre vue -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var formulaire = document.getElementById('formulaireChoix');
        var sectionDemanderAide = document.getElementById('sectionDemanderAide');
        var sectionProposerAide = document.getElementById('sectionProposerAide');

        function afficherMasquerSections() {
            var choixUtilisateur = document.querySelector('input[name="choix"]:checked');
            sectionProposerAide.style.display = 'none';
            sectionDemanderAide.style.display = 'none';

            if (choixUtilisateur) {
                if (choixUtilisateur.value === 'demanderAide') {
                    sectionDemanderAide.style.display = 'block';
                    sectionProposerAide.style.display = 'none';
                } else if (choixUtilisateur.value === 'proposerAide') {
                    sectionDemanderAide.style.display = 'none';
                    sectionProposerAide.style.display = 'block';
                }
            }
        }

        formulaire.addEventListener('change', function(event) {
            if (event.target.name === 'choix') {
                afficherMasquerSections();
            }
        });

        // Appel initial pour afficher/masquer les sections en fonction du choix
        afficherMasquerSections();
    });
</script>

