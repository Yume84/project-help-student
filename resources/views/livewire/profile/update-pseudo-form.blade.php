<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

use function Livewire\Volt\state;

state([
    'pseudo' => fn () => auth()->user()->pseudo,
]);

$updateProfileInformation = function () {
    $user = Auth::user();

    $validated = $this->validate([
        'pseudo'=> ['required', 'string', 'lowercase', 'max:50', 'unique:'.User::class],
    ]);

    $user->fill($validated);

    $user->save();

    $this->dispatch('profile-updated', ['pseudo' => $user->pseudo]);
};


?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>
    </header>

    <form wire:submit="updateProfileInformation" class="mt-4 space-y-6">
        <div>
            <x-input-label for="pseudo" :value="__('Pseudo')" />
            <x-text-input wire:model="pseudo" id="pseudo" name="pseudo" type="text" class="mt-1 block w-full" required autofocus autocomplete="pseudo" />
            <x-input-error class="text-blue mt-2" :messages="$errors->get('pseudo')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
