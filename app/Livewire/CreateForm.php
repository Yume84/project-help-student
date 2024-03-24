<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\College;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    use WithFileUploads;

    public $option;
    public $helps = [];
    public $articles;

    public function mount(){
        $this->getArticles();
    }

    public function render()
    {
        return view('livewire.create');
    }

    public function getArticles(){
        $this->articles = Article::all();
    }

    public function store(){
        $this->resetErrorBag();

        $user = Auth::user();  // Obtenez l'utilisateur actuellement authentifié

        // Construction du message à partir des articles sélectionnés
        $articleNames = Article::whereIn('id', $this->helps)->pluck('title')->toArray();
        $message = implode(', ', $articleNames);
        $option = $this->option;


        // Créer un post pour l'utilisateur
        $post = new Post();
        $post->user_id = $user->id;
        $post->message = $message;
        $post->option = $option;
        $post->save();

        // Attacher les articles au post
        foreach($this->helps as $help){
            $post->articles()->attach($help);
        }

        return redirect()->route('dashboard');
    }
}
