<?php

use App\Models\Post; 
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On; 
use Livewire\Volt\Component;

new class extends Component {

    public Collection $posts; 
    public ?Post $editing = null;
    public ?string $pseudo = null;
 
    public function mount(?string $pseudo = null): void
    {
        $this->pseudo = $pseudo;
        $this->getPosts(); 
    } 

    #[On('post-created')]
    public function getPosts(): void
    {
        $query = Post::with('user')->latest()->where('option', 'Proposer ton aide');

        if ($this->pseudo) {
            $query->whereHas('user', function ($query) {
                $query->where('pseudo', $this->pseudo);
            });
        }

        $this->posts = $query->get();
    }

    public function edit(Post $post): void //On en a plus besoin
    {
        $this->editing = $post;

        $this->getPosts();
    }

    #[On('post-edit-canceled')]
    #[On('post-updated')] 
    public function disableEditing(): void
    {
        $this->editing = null;
 
        $this->getPosts();
    }

    public function delete(Post $post): void
    {
        $this->authorize('delete', $post);
 
        $post->delete();
 
        $this->getPosts();
    } 

}; ?>

<div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
    
    @foreach ($posts as $post)

        <!-- Case pour chaque annonce -->
        <div class="p-6 flex flex-col sm:flex-row mx-auto sm:space-x-7 space-y-5 lg:space-y-0" wire:key="{{ $post->id }}">
            
            <!-- Colonne 1 -->
            <div class="grow h-auto"> <!--Bg-->

                <div class="flex flex-row gap-4">
                    <!-- Photo de profil -->
                    <img src="{{ asset('/images/exemple.jpg') }}" alt="avatar" class="block w-20 h-20 object-cover rounded">

                        <!-- BDD -->
                        <div class="text-lg w-full">

                            <!-- User et date -->
                            <div class="flex flex-row self-end justify-between mb-2">
                                <span class="font-extrabold text-dark-blue text-xl">{{ $post->user->pseudo }}</span>
                                <span class="date text-gray-500">{{ $post->created_at->format('j M Y, g:i a') }}</span>
                            </div>

                            <!-- Université -->
                            <div class="flex flex-row">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-dark-blue w-6 h-6">
                                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                    </svg>
                                </span>
                                
                                <p>{{ $post->college_name}}</p>
                            </div>

                            <!-- Langue et niveau -->
                            <div class="flex flex-row mb-2">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-dark-blue w-6 h-6">
                                        <path fill-rule="evenodd" d="M9 2.25a.75.75 0 0 1 .75.75v1.506a49.384 49.384 0 0 1 5.343.371.75.75 0 1 1-.186 1.489c-.66-.083-1.323-.151-1.99-.206a18.67 18.67 0 0 1-2.97 6.323c.318.384.65.753 1 1.107a.75.75 0 0 1-1.07 1.052A18.902 18.902 0 0 1 9 13.687a18.823 18.823 0 0 1-5.656 4.482.75.75 0 0 1-.688-1.333 17.323 17.323 0 0 0 5.396-4.353A18.72 18.72 0 0 1 5.89 8.598a.75.75 0 0 1 1.388-.568A17.21 17.21 0 0 0 9 11.224a17.168 17.168 0 0 0 2.391-5.165 48.04 48.04 0 0 0-8.298.307.75.75 0 0 1-.186-1.489 49.159 49.159 0 0 1 5.343-.371V3A.75.75 0 0 1 9 2.25ZM15.75 9a.75.75 0 0 1 .68.433l5.25 11.25a.75.75 0 1 1-1.36.634l-1.198-2.567h-6.744l-1.198 2.567a.75.75 0 0 1-1.36-.634l5.25-11.25A.75.75 0 0 1 15.75 9Zm-2.672 8.25h5.344l-2.672-5.726-2.672 5.726Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                
                                <p>{{ $post->language_name}} - {{ __('Level') }} : {{ $post->level}}</p>
                            </div>

                            <!-- Aides -->
                            <div class="flex flex-wrap">
                                @foreach(explode(',', $post->message) as $info)
                                    <p class="bg-blue py-1 px-3 rounded-lg mr-2 mb-2">{{ $info }}</p>
                                @endforeach
                            </div>
                            
                        </div>
                </div>
            </div>
                
            <!-- Call to Action + Supprimer -->
            <div class="flex-none h-auto space-y-2">
                @if ($post->user->is(auth()->user()))
                <x-dropdown>
                    <x-slot name="trigger">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link wire:click="delete({{ $post->id }})" wire:confirm="{{ __('Do you really want to delete this ad ?') }}"> 
                            {{ __('Delete') }}
                        </x-dropdown-link> 
                    </x-slot>
                </x-dropdown>
                @else
                    <a href="{{ route('users-show', $post->user->pseudo) }}" class="block">
                        <div class="bg-yellow rounded py-1 px-4 text-center text-lg">{{ __('Go to profile') }}</div>
                    </a>
                    <a href="" class="block"><div class="bg-yellow rounded py-1 px-4 text-center text-lg">{{ __('Send message') }}</div></a>
                @endif
            </div>            

        </div>
    @endforeach
</div>