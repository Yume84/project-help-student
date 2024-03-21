<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\College;
use App\Models\Language;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdForm extends Component
{
    use WithFileUploads;

    public $level;
    public $college_name;
    public $language_name; 
    public $pseudo; 
    public $message = [];

    public $colleges;
    public $languages;
    public $articles;

    public function mount(){
        $this->getColleges();
        $this->getLanguages();
        $this->getArticles();
        $this->getPosts();
    }

    public function render()
    {
        return view('livewire.ads.create');
    }

    public function getColleges(){
       $this->colleges =  College::all();
    }

    public function getLanguages(){
        $this->languages =  Language::all();
     }

    public function getArticles(){
        $this->articles = Article::all();
        //$other = new Article();
        //:$other->title = "Autres";
        //$this->articles->push($other);
    }

    public function getPosts(){
        $this->posts = Post::all();
    }

    public function register(){
        $this->resetErrorBag();
                $values = array(
                "message"=>$this->message,
            );

            $user = User::create($values);

            $language = Language::find($this->list_language);
            $user->languages()->attach($this->list_language, ['level' => $this->level,"is_primary"=>true]);

            info('contenu de variable helps', [$this->helps]);
            foreach($this->helps as $help){
                $user->articles()->attach($help);
            }

            $userId = $user->id;
            $collegeName = College::find($user->college_id)->name;
            $selectedArticles = $this->helps;
            $articleNames = Article::whereIn('articles.id', $selectedArticles)->pluck('title')->toArray();
            $languageWithLevel = Language::where('id', $this->list_language)->first();
            $languageName = $languageWithLevel->label;
            $level = $this->level;

            $message = "";
            if (!empty($articleNames)) {
                $message .= implode(', ', $articleNames);
            }

            public function saveAd()
{
    // Récupérer les informations existantes du post
    $collegeName = $this->post->college_name;
    $pseudo = $this->post->pseudo;
    $languageName = $this->post->language_name;
    $level = $this->post->level;

            $ad = Ad::insert();
            $ad->user_id = $userId;
            $ad->message = $message;
            $ad->pseudo = $user->pseudo;
            $ad->college_name = $collegeName;
            $ad->language_name = $languageName;
            $ad->level = $level;

            $ad->save();
    
            //$article = Article::find($this->helps);
            //$user->articles()->attach($this->helps, ['level' => $this->level,"is_primary"=>true]);
            //$this->reset();
            //$this->currentStep = 1;
}

    }
}
