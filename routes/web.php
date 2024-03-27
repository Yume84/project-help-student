<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\UserController;
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

// Route::view('/', 'welcome'); 

Route::get('/', function(){
    return view('welcome');})
    ->name('welcome');

Route::get('/a-propos', function(){
    return view('a-propos');})
    ->name('a-propos');

Route::get('/mentions-legales', function(){
    return view('mentions-legales');})
    ->name('mentions-legales');

Route::get('/accessibilite', function(){
    return view('accessibilite');})
    ->name('accessibilite');

Route::get('/contact', function(){
    return view('contact');})
    ->name('contact');

Route::view('/register', 'register')->name('register');
Route::view('/registration-success', 'registration-success')->name('registration.success');

Route::view('dashboard', 'dashboard') // Route qui mène au dashboard / feed
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('dashboard-offer', 'dashboard-offer') // Route qui mène au dashboard / feed
    ->middleware(['auth', 'verified'])
    ->name('dashboard-offer');

// Route pour la sidebar

Route::view('profile', 'profile') // Route qui mène à la page Paramètres et confidentialité
    ->middleware(['auth'])
    ->name('profile');

Route::view('notifications', 'dashboard') // Route qui mène à la page Notifications
    ->middleware(['auth', 'verified'])
    ->name('notifications'); 

Route::view('contact-support', 'contact-support') // Route qui mène à la page Contact
    ->middleware(['auth', 'verified'])
    ->name('contact-support');

// Route pour le footer

Route::view('search', 'dashboard') // Route qui mène à la page Paramètres et confidentialité
    ->middleware(['auth'])
    ->name('search');

Route::get('add', [PostController::class, 'index']) // Route pour les nouvelles annonces
    ->middleware(['auth', 'verified'])
    ->name('add'); 

    Route::view('messages', 'dashboard') // Route qui mène à la page Messages
    ->middleware(['auth', 'verified'])
    ->name('messages');

// Route pour le compte

Route::get('/users/{user:pseudo}', [UserController::class, 'show'])->name('users-show');

Route::view('edit-profile', 'edit-profile') // Route qui mène à la page Notifications
->middleware(['auth', 'verified'])
->name('edit-profile');

Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/messages/{post_id}', [MessageController::class, 'showConversation'])->name('messages.conversation');
Route::post('/messages/store', [MessageController::class, 'store'])->name('messages.store');

// Autres

require __DIR__.'/auth.php';

Route::get('/user',[Controller::class, 'action']);

Route::get('/avatars', [AvatarController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('avatars');

Route::get('ads', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('ads'); 

Route::get('home', function(){
    return view('home');})
    ->name('home');


