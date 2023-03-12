<?php

namespace App\Http\Controllers;

use App\Models\LiveChat;
use Illuminate\Http\Request;

class LiveChatController extends Controller
{
    public function store(Request $request)
    {
        LiveChat::create([
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
        ]);

        return redirect()->to('/');
    }
}
