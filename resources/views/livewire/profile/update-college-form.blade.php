<?php

use App\Models\User;
use App\Models\College;
use App\Models\Post;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

use function Livewire\Volt\state;

state([
    'college' => fn () => auth()->user()->college_id,
]);

$updateProfileInformation = function () {
    $user = Auth::user();

    $validated = $this->validate([
        'college' => ['required', 'exists:colleges,id'], 
    ]);

    // Mettre à jour le college de l'utilisateur
    $user->college_id = $validated['college'];
    $user->save();

    $collegeName = College::find($user->college_id)->name;

    $this->dispatch('profile-updated', ['college' => $user->college_id]);
};

?>

<section>

    <form wire:submit.prevent="updateProfileInformation" class="space-y-6">
        <div>
            <x-input-label for="college" :value="__('College')" />
            <x-select name="college" id="college" wire:model="college">
                <option value="default">Sélectionne un campus</option>
                @foreach($college->sortBy('name') as $collegeItem)
                    <option value="{{ $collegeItem->id }}">{{ $collegeItem->name }}</option>
                @endforeach
            </x-select>
            <x-input-error :messages="$errors->get('college_id')" class="text-blue" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
