<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Language;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

  public function action(){

        $user = User::first(); //Sélectionne le premier utilisateur dans cette variable

        $languages = Language::all();

        return view("user") //Afficher la page user blade
                ->with([
                    'user'=>$user,
                    "languages"=>$languages
            ]); //Les informations de la variable est récupérée et affichée sur la page blade
    }

    public function index()
    {
        $languages = $this->getLanguages();
        return view('livewire.multi-step-form', compact('languages'));
    }

    /* public function showArticle(){

        $lang = app()->getLocale();

        $article = Article::where('lang', '=', $lang)->first();

        return view('')
            ->with(['article' => $article]);

    }*/

}
