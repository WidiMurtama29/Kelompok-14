<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $aleradyExists = Subscribe::where('email', $request->email)->exists();

        if (!$aleradyExists) {
            Subscribe::create(["email" => $request->email]);
        }

        return redirect()->to('/');
    }
}
