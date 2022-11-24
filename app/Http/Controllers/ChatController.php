<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $user = User::all()->find(1);
        $chats = $user->chats()->getResults();
        $selected_chat_messages = $chats->first()->messages()->getResults();
        ray($selected_chat_messages);
        return view('layouts.chats', compact('chats','selected_chat_messages'));
    }

    public function store(Request $request)
    {
//        $validated = $request->validate([
//            'title' => 'required|min:5|max:255',
//            'body' => 'required',
//        ]);
//
//        Article::create([
//            'title' => $request->title,
//            'body' => $request->body,
//            'published_at' => now(),
//            'author_id' => 1,
//            'tag_id' => 1,
//        ]);

        return redirect()->route('/');
    }
}
