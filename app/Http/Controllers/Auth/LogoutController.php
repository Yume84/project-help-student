<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Livewire\Actions\Logout;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Logout $logout, Request $request)
    {
        $logout();

        return redirect('/'); // Redirige l'utilisateur après la déconnexion
    }
}