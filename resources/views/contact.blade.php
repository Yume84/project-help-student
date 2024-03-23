<x-home-layout>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 min-h-screen" >

        <!-- Titre -->
        <div class="text-center mb-14">
            <h2 class="inline-block font-bold uppercase text-light-blue text-2xl bg-dark-blue border-dark-blue p-2 mb-4 rounded-lg">{{ __('Contact & Support') }}</h2>
        </div>

        <!-- Contenu -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            <!-- Informations -->
            <div class="text-left">
                <h3 class="text-lg font-extrabold text-dark-blue mb-10">Tu souhaites un renseignement ? Tu rencontres un problème technique ? Contacte-nous.</h3>

                <!-- Adresse -->
                <div class="flex flex-row gap-2 mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-dark-blue w-6 h-6">
                        <path fill-rule="evenodd" d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z" clip-rule="evenodd" />
                    </svg>
                    <div class="flex flex-col">
                        <p>Université Gustave Eiffel</p>
                        <p>Bâtiment Bois de l'Etang</p>
                        <p>5 Bd Descartes</p> 
                        <p>77420 Champs-sur-Marne</p>
                    </div>
                </div>

                <!-- Numéro de téléphone -->
                <div class="flex flex-row gap-2 mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-dark-blue w-6 h-6">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    <p>01 60 95 75 00</p>
                </div>

                <!-- Mail -->
                <div class="flex flex-row gap-2 mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block text-dark-blue w-6 h-6">
                        <path fill-rule="evenodd" d="M17.834 6.166a8.25 8.25 0 1 0 0 11.668.75.75 0 0 1 1.06 1.06c-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0A9.722 9.722 0 0 1 21.75 12c0 .975-.296 1.887-.809 2.571-.514.685-1.28 1.179-2.191 1.179-.904 0-1.666-.487-2.18-1.164a5.25 5.25 0 1 1-.82-6.26V8.25a.75.75 0 0 1 1.5 0V12c0 .682.208 1.27.509 1.671.3.401.659.579.991.579.332 0 .69-.178.991-.579.3-.4.509-.99.509-1.671a8.222 8.222 0 0 0-2.416-5.834ZM15.75 12a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0Z" clip-rule="evenodd" />
                    </svg>
                    <a href="mailto:studdle@gmail.com" class="underline">studdle@gmail.com</a>
                </div>

            </div>

            <!-- Maps -->
            <div class="flex justify-center items-center h-full mb-14">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d10503.57914638046!2d2.57974045!3d48.84114555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sfr!2sfr!4v1711133686478!5m2!1sfr!2sfr" width="480" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>

</x-home-layout>

