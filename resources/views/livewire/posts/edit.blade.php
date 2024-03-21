<?php

use App\Models\Post; 
use Livewire\Attributes\Validate; 
use Livewire\Volt\Component;

new class extends Component {

    public Post $post; 
 
    #[Validate('required|string|max:255')]
    public string $message = '';

    #[Validate('required|string|max:255')]
    public string $language_name = '';

    #[Validate('required|string|max:255')]
    public string $college_name = '';
 
    public function mount(): void
    {
        $this->message = $this->post->message;
        $this->language_name = $this->post->language_name;
        $this->college_name = $this->post->college_name;
    }
 
    public function update(): void
    {
        $this->authorize('update', $this->post);
 
        $validated = $this->validate();
 
        $this->post->update($validated);
 
        $this->dispatch('post-updated');
    }
 
    public function cancel(): void
    {
        $this->dispatch('post-edit-canceled');
    }

}; ?>

<div>

<form wire:submit="update"> 
        <textarea
            wire:model="message"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-post-button class="mt-4">{{ __('Save') }}</x-post-button>
        <button class="mt-4" wire:click.prevent="cancel">{{ __('Cancel') }}</button>
    </form> 

</div>
