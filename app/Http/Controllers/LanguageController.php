<?php

namespace App\Http\Controllers;
use App\Models\Language;
use Illuminate\View\View;

public function index()
{
    $languages = Language::all(); // Récupère toutes les langues

    return view('register', compact('languages'));
}



