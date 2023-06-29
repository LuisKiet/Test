<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class JokeController extends Controller
{
    //
    public function getJoke(Request $request)
    {
        if ($request->cookie('name') != null) {
            return view('joke_cookie');
        } else {
            $joke = Joke::orderBy('id', 'DESC')->get();

            return view('joke', compact('joke'));
        }
    }

    public function setCookie(Request $request)
    {
        $response = new \Illuminate\Http\Response(view('joke_tks'));
        $response->withCookie(cookie('name', 'hahahah', 0.1));
        
        return $response;
    }
}
