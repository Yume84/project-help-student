<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Ad;

class AdForm extends Component
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
        return view('add');
    }

    public function getArticles(){
        $this->articles = Article::all();
    }

    public function validateData()
    {
        $this->validate([
            'option' => 'required',
            'helps' => 'required',
            'articles' => 'required',
        ]);
    }

    public function store(){
        $this->resetErrorBag();
                $values = array(
                "helps"=>$this->helps,
            );

            $user = Ad::create($values);

            info('contenu de variable helps', [$this->helps]);
            foreach($this->helps as $help){
                $user->articles()->attach($help);
            }

            return redirect()->route('dashbord');

    }
}
