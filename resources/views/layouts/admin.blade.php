<!-- Side bar / Menu hamburger après connexion -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
        <div class="relative min-h-screen md:flex" x-data="{ open: true }">
            <!--Sidebar -->
            <aside :class="{ '-translate-x-full': !open }" class="z-10 bg-dark-blue text-light-blue w-80 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg">
                <!-- Logo -->
                <div class="flex items-center justify-between px-2">
                    <div class="flex items-center space-x-4">
                        <a href="">
                            <x-application-logo class="block h-10 w-auto fill-current text-light-blue"/> <!-- Changer avec notre logo -->
                        </a> 
                        <span class="text-2xl font-extrabold">Mon compte</span>
                    </div>
                    <button type="button" @click="open = !open" class="md:hidden lg:inline-flex p-2 items-center justify-center rounded-md text-light-blue hover:bg-medium-blue focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>

                </div>

                <!-- Nav Links -->
                <nav>

                </nav>
            </aside>

            <!-- Main Content-->
            <main>
                <nav></nav>
                <div>
                    {{ $slot }}
                </div>

            </main> 
        </div>
        
    </body>
</html>


