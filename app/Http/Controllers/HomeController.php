<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $posts = request()->user()->feed;

        $followable = request()->user()->followable();

        return view('home', [
            'posts' => $posts,
            'followable' => $followable,
        ]);
    }
}
