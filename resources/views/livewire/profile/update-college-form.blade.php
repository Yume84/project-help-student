<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Component;  // Ajout de l'importation de la classe Component


use function Livewire\Volt\state;

state([
    'college' => fn () => auth()->user()->college_id,
]);

$updateProfileInformation = function () {
    $user = Auth::user();

    $validated = $this->validate([
        'college' => ['required'], 
    ]);

    $user->fill($validated);

    $user->save();

    $this->dispatch('profile-updated', ['college' => $user->college_id]);
};

class College extends Component
{
    public $college;

    public function mount(): void
    {
        $this->college = \App\Models\College::all();  
    }

    public function render()
{
    return view('edit-profile', [
        'college' => \App\Models\College::all(),
    ]);
}
}

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
