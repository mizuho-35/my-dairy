<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = [
        (object)[
            'id' => 1,
            'title' => 'テスト投稿①',
            'user' => (object)['name' => 'sample user'],
            'created_at' => now(),
        ],
        (object)[
            'id' => 2,
            'title' => 'テスト投稿②',
            'user' => (object)['name' => 'another user'],
            'created_at' => now(),
        ],
    ];

    return view('home.index', compact('posts'));
    }
}
