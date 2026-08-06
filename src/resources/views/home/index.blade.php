@extends('layouts.default')

@section('title', 'my memo')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')
<div class="container">
    <main class="main">
        <aside class="sidebar">
            <div class="category">
                <h2>カテゴリ一覧</h2>
                <ul>
                    <!-- ここにカテゴリーテーブルの値を入れる -->
                    <li>◇イラスト</li>
                    <li>◇カフェ</li>
                    <li>◇ファッション</li>
                    <li>◇読書</li>
                    <li>◇日記</li>
                    <li>◇学習</li>
                    <li>◇音楽</li>
                    <li>◇推し</li>
                </ul>
            </div>

        </aside>

        <section class="content">
            <div class="search-bar">
                <input type="text" placeholder="🔍検索">
                <button>検索</button>
            </div>

            <!-- タグテーブルの値を入れる -->
{{--
            <div class="tag-row">
                @foreach ($tags as $tag)
                    <label class="tag-item">
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                        {{ $tag->name }}
                    </label>
                @endforeach
            </div>
--}}

            <div class="tabs">
                <span class="active">おすすめ</span>
                <span>新着</span>
                <span>フォロー中</span>
            </div>

            <!-- 投稿テーブルの値を入れる -->
{{--
            <div class="posts">
                @foreach ($posts as $post)
                    <div class="post-card">
                        <div class="image">画像</div>
                        <div class="info">
                            <p>投稿者名 {{ $post->user->name }}</p>
                            <p>{{ $post->created_at->format('m月d日(D) H:i') }}</p>
                            <h3>{{ $post->title }}</h3>
                            <p>{{ Str::limit($post->body, 50) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
--}}

        </section>
    </main>
</div>
@endsection
