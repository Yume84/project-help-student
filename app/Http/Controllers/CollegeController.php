<?php
namespace App\Http\Controllers;
use App\Models\College;

class CollegeController extends Controller
{
    public function showForm()
    {
        $colleges = College::all();

        return view('college-list', compact('colleges'));
    }
}
