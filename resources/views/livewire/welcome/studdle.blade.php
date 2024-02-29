<div class="flex flex-col space-y-4">
    @auth
        <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-blue border border-transparent rounded-md font-extrabold text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150" wire:navigate>Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="px-6 py-3 bg-blue border border-transparent rounded-md font-extrabold text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150" wire:navigate>J'ai déjà un compte</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="px-6 py-3 bg-blue border border-transparent rounded-md font-extrabold text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150" wire:navigate>C'est parti !</a>
        @endif
    @endauth
</div>
