<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

use function Livewire\Volt\state;

state([
    'avatar' => fn () => auth()->user()->avatar_url,
]);

$updateProfileInformation = function () {
    $user = Auth::user();

        $this->validate([
            'avatar' => ['image', 'nullable'], // Ajout de 'nullable' pour permettre la mise à jour sans sélection de nouvel avatar
        ]);

        $avatar=$this->avatar->store('avatars', 'public'); // Stocker l'avatar dans le dossier 'avatars' du stockage public
            $user->avatar_url = $path;

        $user->save();

        $this->dispatch('profile-updated');
    }

?>

<section>
    <form wire:submit.prevent="updateProfileInformation" class="space-y-6" enctype="multipart/form-data">
        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input wire:model="avatar" id="avatar" name="avatar" type="file" class="mt-4 block w-full form-control" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
