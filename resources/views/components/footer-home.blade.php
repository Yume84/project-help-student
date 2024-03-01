<footer class="bg-dark-blue shadow-lg grid grid-cols-1 md:grid-cols-4 px-2 sm:px-8 sm:gap-4">

    <x-footer-link-home href="{{ route('a-propos') }}" :active="request()->routeIs('a-propos')" class="mx-auto w-full sm:px-6 lg:px-8 flex justify-center">
        <div class="text-light-blue">
            À propos
        </div>
    </x-footer-link-home>
    
    <x-footer-link-home href="{{ route('mentions-legales') }}" :active="request()->routeIs('mentions-legales')" class="mx-auto w-full sm:px-6 lg:px-8 flex justify-center">
        <div class="text-light-blue">
            Mentions légales
        </div>
    </x-footer-link-home>

    <x-footer-link-home href="{{ route('accessibilite') }}" :active="request()->routeIs('accessibilite')" class="mx-auto w-full sm:px-6 lg:px-8 flex justify-center">
        <div class="text-light-blue">
            Accessibilité
        </div>
    </x-footer-link-home>

    <x-footer-link-home href="{{ route('contact') }}" :active="request()->routeIs('dashboard')" class="mx-auto w-full sm:px-6 lg:px-8 flex justify-center">
        <div class="text-light-blue">
            Contact et support
        </div>
    </x-footer-link-home>

</footer>