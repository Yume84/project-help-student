<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class MessagesConversation extends Component
{
    public $messages;

    public function mount($postId)
    {
        // Récupérer les messages de la conversation à partir du post ID
        $this->messages = Message::where('post_id', $postId)->get();
    }

    public function store()
    {
        // Récupérer l'ID de l'utilisateur connecté
        $userId = Auth::id();

        // Effectuer l'insertion des données dans votre table en spécifiant 'user_id'
        Message::create([
            'user_id' => $userId,
            // Autres colonnes et valeurs à insérer
        ]);

        // Rafraîchir la liste des messages après l'ajout d'un nouveau message
        $this->mount($postId);
    }

    public function redirectToConversation($postId)
    {
        $url = route('messages.conversation', ['postId' => $postId]);
        return redirect()->to($url);
    }

    public function render()
    {
        return view('livewire.messages-conversation', [
            'messages' => $this->messages,
        ]);
    }
}
