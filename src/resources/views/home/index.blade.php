@extends('layouts.default')

@section('title', 'my diary')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')
<div class="container">
    <main class="main">

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

        <section class="content">
            <!-- 検索フォーム -->
            <form action="/search" method="GET" class="search-form">
                <div class="search-bar">
                    <input type="text" name="keyword" placeholder="検索">
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
                @forelse ($posts ?? [] as $post)
                    <div class="post-card">
                        <div class="image">画像</div>
                        <div class="info">
                            <p>投稿者名 {{ $post->user->name }}</p>
                            <p>{{ $post->created_at->format('m月d日(D) H:i') }}</p>
                            <h3>{{ $post->title }}</h3>
                            <p>{{ Str::limit($post->body, 50) }}</p>
                        </div>
                    </div>
                @empty
                    <!-- ダミー投稿用 -->
                    <div class="post-card">
                        <div class="image">画像</div>
                        <div class="info">
                            <p>投稿者名 sample user</p>
                            <p>08月08日(土) 12:00</p>
                            <h3>サンプルタイトル</h3>
                            <p>これはサンプル投稿です。</p>
                        </div>
                    </div>
                @endforelse
            </div>

        </section>
    </main>
</div>
@endsection
