
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

        <!-- Affichage des messages de la conversation -->
<div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($messages as $message)
                <div class="p-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-3">
                            <!-- Afficher ici l'avatar de l'utilisateur qui a envoyé le message -->
                            <img class="w-8 h-8 rounded-full" src="{{ $message->user->avatar_url }}" alt="{{ $message->user->name }}">
                        </div>
                        <div>
                            <div class="font-semibold">{{ $message->user->name }}</div>
                            <div class="text-gray-600">{{ $message->created_at->format('d/m/Y H:i') }}</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <!-- Afficher ici le contenu du message -->
                        <p>{{ $message->content }}</p>
                    </div>
                </div>
            @endforeach
</div>

    </div>
</x-admin-layout>
