<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public int $selected_chat_id = 0;

    public function index()
    {
        $user = User::all()->find(1);
        $chats = $user->chats()->getResults();
        $selected_chat = $chats->first();
        $selected_chat_messages = $selected_chat->messages()->getResults();
        ray($selected_chat);
        ray($selected_chat_messages);
        $this->selected_chat_id = $selected_chat->id;

        ray( $this->selected_chat_id);
        return view('layouts.chats', compact('chats','selected_chat_messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required',
        ]);
        Message::create([
            'published_at' => now(),
            'text' => $request->text,
            'user_id' => 1,
            'chat_id' => $request->chat_id,
        ]);
        return redirect()->back();
    }
}
