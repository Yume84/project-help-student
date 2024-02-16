<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('home', 'home'); // Pour avoir accès à la page d'accueil de Stoddle

Route::view('sign-up', 'sign-up-0'); // Pour avoir accès à la première page du tunnel d'inscription
Route::view('sign-up-1', 'sign-up-1'); // 1
Route::view('sign-up-2', 'sign-up-2'); // 2
Route::view('sign-up-3', 'sign-up-3'); // 3
Route::view('sign-up-4', 'sign-up-4'); // 4
Route::view('sign-up-5', 'sign-up-5'); // 5

Route::view('/', 'welcome'); 

Route::view('dashboard', 'dashboard') // Route qui mène au dashboard / feed
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route pour la sidebar

Route::view('profile', 'profile') // Route qui mène à la page Paramètres et confidentialité
    ->middleware(['auth'])
    ->name('profile');

Route::view('notifications', 'dashboard') // Route qui mène à la page Notifications
    ->middleware(['auth', 'verified'])
    ->name('notifications');

Route::view('contact', 'dashboard') // Route qui mène à la page Contact
    ->middleware(['auth', 'verified'])
    ->name('contact');

// Route pour le footer

Route::view('search', 'dashboard') // Route qui mène à la page Paramètres et confidentialité
    ->middleware(['auth'])
    ->name('search');

Route::view('add', 'dashboard') // Route qui mène à la page Notifications
    ->middleware(['auth', 'verified'])
    ->name('add');

Route::view('messages', 'dashboard') // Route qui mène à la page Notifications
    ->middleware(['auth', 'verified'])
    ->name('messages');

// Autres

require __DIR__.'/auth.php';

Route::get('/user',[Controller::class, 'action']);

