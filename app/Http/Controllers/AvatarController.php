<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\View\View;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource. 
     */

     public function index(): View
     {
         return view('avatars', [
             //
         ]);    
     }
}
