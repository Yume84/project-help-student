<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index(): View
    {
        return view('ads', [
            //
        ]);    
    }
}
