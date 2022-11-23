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
        return view('layouts.chats', compact('chats'));
    }
}
