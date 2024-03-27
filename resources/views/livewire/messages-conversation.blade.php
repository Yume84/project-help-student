
<x-admin-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <!-- Affichage du post sélectionné -->
        <div class="my-4">
            <!-- Affichez les détails du post ici -->
        </div>

        <!-- Formulaire pour envoyer un message -->
        <form action="{{ route('messages.store') }}" method="post">
            @csrf
            <textarea name="message" placeholder="Write your message here..." class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
            <button type="submit" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-md">{{ __('Send') }}</button>
        </form>

    </div>
</x-admin-layout>
