<?php

use App\Models\User;
use App\Models\Language;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.step');

state([
    'name' => '',
    'pseudo' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => '',

    'option' => '',
    'category' => '',
    'helps' => [],
    'list_language' => [],
    'list_level' => '',
    'list_college' => [],
    'rgpd' => false
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'pseudo' => ['required', 'string', 'max:50', 'unique:'.User::class],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],

    'option' => ['required'],
    'category' => ['required'],
    'helps' => ['required', 'array'],
    'list_language' => ['required', 'array'],
    'list_level' => ['required', 'array'],
    'list_college' => ['required', 'array'],
    'rgpd' => ['required'],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    $this->redirect(RouteServiceProvider::HOME, navigate: true);
};

?>

<div>
    @livewire('multi-step-form')
</div>
