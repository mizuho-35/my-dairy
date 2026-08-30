@extends('layouts.default')

@section('title', 'my diary')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')
<div class="layout">
    <!-- サイドバー -->
    <aside class="sidebar">
        <div class="category">
            <h2>カテゴリ一覧</h2>
            <ul>
                <!-- 後でカテゴリをDBから取得する -->
                @forelse ($categories ?? [] as $category)
                    <li>◇ {{ $category->name }}</li>
                @empty
                    <!-- 今はダミー表示 -->
                    <li>◇ イラスト</li>
                    <li>◇ カフェ</li>
                    <li>◇ ファッション</li>
                    <li>◇ 読書</li>
                    <li>◇ 日記</li>
                    <li>◇ 学習</li>
                    <li>◇ 音楽</li>
                    <li>◇ 推し</li>
                @endforelse
            </ul>
        </div>
    </aside>

    <main class="main">
        <section class="content">
            <!-- 検索フォーム -->
            <form action="/search" method="GET" class="search-form">
                <div class="search-bar">
                    <input type="text" name="keyword" placeholder="例：嬉しかったこと">
                    <button type="submit" class="search-btn">検索</button>
                </div>
            </form>

            <!-- タブ -->
            <div class="tabs">
                <span class="active">おすすめ</span>
                <span>新着</span>
                <span>フォロー中</span>
            </div>

            <!-- 投稿一覧 -->
            <div class="posts">
                @foreach ($posts as $post)
                    <a href="{{ route('posts.show', $post->id) }}" class="post-card">
                        <div class="image">画像</div>
                        <div class="info">
                            <p class="username">{{ $post->user->name }}</p>
                            <h3 class="title">{{ $post->title }}</h3>
                            <p class="date">{{ $post->created_at->format('m月d日(D) H:i') }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </main>
</div>
@endsection
