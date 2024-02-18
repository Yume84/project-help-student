<?php

use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {

    #[Validate('required|string|max:255')]
    public string $message = ''; 
     
    public function store(): void
    {
        $validated = $this->validate();
 
        auth()->user()->posts()->create($validated);
 
        $this->message = '';

        $this->dispatch('post-created'); 
    } 
    
}; ?>

<div>
    
    <form wire:submit="store"> 
        <textarea
            wire:model="message"
            placeholder="{{ __('Partage ton annonce ici !') }}"
            class="block w-full border-dark-blue hover:border-blue rounded-md shadow-sm"
        ></textarea>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-post-button class="bg-dark-blue hover:bg-blue mt-4">{{ __('Envoyer') }}</x-post-button>
    </form> 

</div>
