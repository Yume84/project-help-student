<?php

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Post;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use App\Models\Language;
use App\Models\College;

new class extends Component
{
    #[Validate('required|string|max:255')]
    public string $message = '';
 
    public function store(): void
    {
        $validated = $this->validate([
            'message' => ['required', 'string', 'max:255'],
        ]);

        $user = Post::create($values);

        info('contenu de variable helps', [$this->helps]);
        foreach($this->helps as $help){
            $user->articles()->attach($help);
        }

        $userId = $user->id;
        $collegeName = College::find($user->college_id)->name;
        $languageWithLevel = Language::where('id', $user->list_language)->first();
        $languageName = $languageWithLevel->label;
        $level = $user->level;

        $selectedArticles = $validated['helps'];
        $articleNames = Article::whereIn('articles.id', $selectedArticles)->pluck('title')->toArray();

        $message = implode(', ', $articleNames);

        $post = new Post();
        $post->user_id = $userId;
        $post->message = $message;
        $post->pseudo = $user->pseudo;
        $post->college_name = $collegeName;
        $post->language_name = $languageName;
        $post->level = $level;

        $post->save();

        $post->articles()->attach($selectedArticles); // Attach to pivot table

        $this->dispatch('post-created'); 
    } 
}; 
?>

<div>
    <form wire:submit.prevent="store"> 

        <h3 class="text-3xl text-blue uppercase font-extrabold text-center mb-4">Poste une annonce</h3>
        <h4 class="text-2xl text-light-blue font-extrabold text-center">Tu veux :</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:gap-2 md:gap-8 pt-10 pb-10">
        
            <x-radio-input required wire:model="option" id="ask_help" class="block mt-1 w-full" type="radio" name="choice" :value="__('Ask for help')">
                {{ __('Ask for help') }}
            </x-radio-input>
                
            <x-radio-input required wire:model="option" id="offer_help" class="block mt-1 w-full" type="radio" name="choice" :value="__('Offer help')">
                {{ __('Offer help') }}
            </x-radio-input>

            <x-input-error :messages="$errors->get('option')" class="text-blue" />
        
        </div>

        <h4 class="text-2xl text-light-blue font-extrabold text-center">Pour :</h4>
        <div class="grid grid-cols-1 md:grid-cols-4 sm:gap-2 md:gap-8 pt-10 pb-10">
    
            @foreach (\App\Models\Article::all() as $article)
                <x-checkbox-input required wire:model="helps" id="{{$article->title}}" class="block mt-1 w-full" type="checkbox" name="helps" :value="$article->id">
                    {{ __($article->title) }}
                </x-checkbox-input>
            @endforeach 
    
            <x-input-error :messages="$errors->get('helps')" class="text-blue" />
    
        </div>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-register-button type="submit">
                {{ __('Register') }}
            </x-register-button>
    </form> 
</div>
