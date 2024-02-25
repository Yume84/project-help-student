<footer class="bg-dark-blue shadow-lg fixed bottom-0 w-full">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-1 items-center justify-center h-16">

            <x-footer-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <span class="flex justify-center block w-full h-6 text-light-blue">
                    À propos
                </sspan>
            </x-footer-link>

            <x-footer-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <span class="flex justify-center block w-full h-6 text-light-blue">
                    Mentions légales
                </sspan>
            </x-footer-link>

            <x-footer-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <span class="flex justify-center block w-full h-6 text-light-blue">
                    Contact et support
                </sspan>
            </x-footer-link>
        </div>
    </div>
</footer>
