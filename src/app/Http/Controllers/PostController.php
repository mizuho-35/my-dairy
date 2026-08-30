<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        $post = (object)[
            'id' => $id,
            'title' => 'テスト投稿のタイトル',
            'body' => 'ここに本文が入ります。',
            'user' => (object)['name' => 'sample user'],
            'created_at' => now(),
            'tags' => collect([
                (object)['name' => 'タグ1'],
                (object)['name' => 'タグ2'],
            ]),
            'comments' => collect([
                (object)['body' => 'コメント1'],
                (object)['body' => 'コメント2'],
            ]),
        ];

        return view('posts.show', compact('post'));
    }
}
