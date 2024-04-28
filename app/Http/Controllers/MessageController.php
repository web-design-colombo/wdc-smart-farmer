<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $message = new Message();
        $message->content = $request->input('content');
        $message->user_id = auth()->id(); // Set user ID
        $message->save();

        return redirect('/messages');
    }

    public function index()
    {
        $messages = Message::with('user')->latest()->get();
        return view('messages.index', ['messages' => $messages]);
    }
}
