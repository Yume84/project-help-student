<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

  public function action(){

        $user = User::first(); //Sélectionne le premier utilisateur dans cette variable

        return view("user") //Afficher la page user blade
                ->with(['user'=>$user]); //Les informations de la variable est récupérée et affichée sur la page blade
                //ajouter essai
    }

}
