<div class="flex flex-col space-y-4 mb-10">
    @auth
        <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-blue border border-transparent rounded-md font-extrabold text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150" wire:navigate>{{ __('Dashboard') }}</a>
    @else

    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="px-6 py-3 bg-blue border border-transparent rounded-md font-extrabold text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150" wire:navigate>{{ __('Let’s get started !') }}</a>
    @endif
    
    <a href="{{ route('login') }}" class="px-6 py-3 bg-blue border border-transparent rounded-md font-extrabold text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150" wire:navigate>{{ __('I already have an account') }}</a>

    @endauth
</div>
