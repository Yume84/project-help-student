<?php
namespace App\Http\Controllers;
use App\Models\Language;

class LanguageController extends Controller
{
    public function showForm()
    {
        $languages = Language::all();

        return view('language-list', compact('languages'));
    }
}
