<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{

    public function showConversation($postId)
    {
        $messages = Message::all();
        $post = Post::findOrFail($postId);
        $messages = Message::where('post_id', $postId)->get();

    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);


        Message::create([
            'user_id' => auth()->user()->id,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Message sent successfully!');
    }

    public function redirectToConversation($postId)
    {
        $url = route('messages-conversation', ['postId' => $postId]);
        return redirect()->to($url);
    }

    public function render()
    {
        return view('livewire.messages-conversation');
    }
}

