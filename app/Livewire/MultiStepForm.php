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
use Illuminate\Validation\Rules;


class MultiStepForm extends Component
{
    use WithFileUploads;

    public $option;
    public $category;
    public $helps = [];
    public $list_language;
    public $level;
    public $college;
    public $name; 
    public $pseudo; 
    public $email; 
    public $password; 
    public $password_confirmation; 

    public $colleges;
    public $languages;
    public $articles;

    public $totalSteps = 6;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
        $this->getColleges();
        $this->getLanguages();
        $this->getArticles();
    }

    public function render()
    {
        return view('livewire.multi-step-form');
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

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }

    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 2){
                $this->validate([
                'option'=> ['required']
            ]);
        }
        elseif($this->currentStep == 3){
             $this->validate([
                'helps'=> ['required', 'array']
            ]);
        }
        elseif($this->currentStep == 4){
             $this->validate([
                'list_language'=> ['required'],
                'level'=> ['required']
            ]);
        }
        elseif($this->currentStep == 5){
             $this->validate([
                'college'=> ['required']
            ]);
        }
        elseif($this->currentStep == 6){
             $this->validate([
                'name'=> ['required'],
                'pseudo'=> ['required'],
                'email'=> ['required'],
                'password'=> ['required'],
                'password_confirmation'=> ['required'],
                'rgpd'=> ['required']
            ]);
        }
    }

    public function register(){
        $this->resetErrorBag();

                // Validation des données
                $validatedData = $this->validate([
                'name'=> ['required', 'string', 'max:50'],
                'pseudo'=> ['required', 'string', 'max:50', 'unique:'.User::class],
                'email'=> ['required', 'string', 'lowercase', 'email', 'max:100', 'unique:'.User::class],
                'password'=> ['required', 'min:8', 'confirmed', Rules\Password::defaults()],
            ]);

                $values = array(
                "name"=>$this->name,
                "pseudo"=>$this->pseudo,
                "email"=>$this->email,
                "password"=>Hash::make($this->password),
                "college_id"=>$this->college,
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

            $post = new Post();
            $post->user_id = $userId;
            $post->message = $message;
            $post->pseudo = $user->pseudo;
            $post->college_name = $collegeName;
            $post->language_name = $languageName;
            $post->level = $level;

            $post->save();
    
            //$article = Article::find($this->helps);
            //$user->articles()->attach($this->helps, ['level' => $this->level,"is_primary"=>true]);
            //$this->reset();
            //$this->currentStep = 1;
            $data = ['pseudo'=>$this->pseudo, 'email'=>$this->email];
            return redirect()->route('registration.success', $data);


    }
}
