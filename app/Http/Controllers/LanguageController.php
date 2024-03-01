<?php
namespace App\Http\Controllers;
use App\Models\Language;

class LanguageController extends Controller
{
    public function showForm()
    {
        $languages = Language::all();

        return view('multi-step-form', compact('languages'));
    }
}
