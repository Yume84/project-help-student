<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\MessageController;


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

Route::get('/home', function(){
    return view('home');})
    ->name('home');

Route::get('/a-propos', function(){
    return view('a-propos');})
    ->name('a-propos');

Route::get('/mentions-legales', function(){
    return view('mentions-legales');})
    ->name('mentions-legales');

Route::get('/contact', function(){
    return view('contact');})
    ->name('contact');

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

// Route pour le compte

Route::view('account', 'account') // Route qui mène à la page Notifications
    ->middleware(['auth', 'verified'])
    ->name('account');

Route::get('/articles/{article}', [ArticleController::class, 'show']);

// Autres

require __DIR__.'/auth.php';

Route::get('/user',[Controller::class, 'action']);


Route::get('/avatars', [AvatarController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('avatars');

Route::get('add', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('add'); 

Route::get('chat', [MessageController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chat'); 