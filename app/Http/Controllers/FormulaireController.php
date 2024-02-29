<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function afficherFormulaire()
    {
        return view('form-test');
    }

    // Ajoutez d'autres méthodes du contrôleur si nécessaire
}

