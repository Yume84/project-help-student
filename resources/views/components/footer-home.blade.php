<footer class="bg-dark-blue shadow-lg grid grid-cols-1 md:grid-cols-3">

    <div class="mx-auto w-full sm:px-6 lg:px-8 flex justify-center">
        <x-footer-link href="{{ route('a-propos') }}" :active="request()->routeIs('dashboard')">
            <span class="text-light-blue">
                À propos
            </span>
        </x-footer-link>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8 flex justify-center">
        <x-footer-link href="{{ route('mentions-legales') }}" :active="request()->routeIs('dashboard')">
            <span class="text-light-blue">
                Mentions légales
            </span>
        </x-footer-link>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8 flex justify-center">
        <x-footer-link href="{{ route('contact') }}" :active="request()->routeIs('dashboard')">
            <span class="text-light-blue">
                Contact et support
            </span>
        </x-footer-link>
    </div>

</footer>

