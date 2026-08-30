@extends('layouts.default')

@section('title', 'my diary')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/posts.css') }}">
@endsection

@section('content')
<div class="post-page-bg">   <!-- ← 水色背景 -->

    <div class="post-detail"> <!-- ← 白いカード -->

        <a href="/" class="close-btn">閉じる</a>

        <div class="post-header">
            <!-- 左側：画像エリア -->
            <div class="image-area">
                <div class="post-image">画像</div>
            </div>

            <!-- 右側：本文＋コメント -->
            <div class="meta">

                <!-- 投稿者情報 -->
                <div class="author-info">
                    <div class="avatar"></div>
                    <p class="username">{{ $post->user->name }}</p>
                </div>

                <!-- タイトル -->
                <h2 class="title">{{ $post->title }}</h2>

                <!-- カテゴリ -->
                <span class="category">{{ $post->category->name ?? 'カテゴリ未設定' }}</span>

                <!-- 本文 -->
                <p class="body">{{ $post->body }}</p>

                <!-- タグ -->
                <div class="tags">
                    @foreach ($post->tags as $tag)
                        <span class="tag">#{{ $tag->name }}</span>
                    @endforeach
                </div>

                <!-- 投稿日 -->
                <p class="date">投稿日：{{ $post->created_at->format('m月d日') }}</p>

                <!-- コメント一覧（右側に移動） -->
                <div class="comments">
                    <h3>コメント {{ $post->comments->count() }}件</h3>

                    @foreach ($post->comments as $comment)
                        <div class="comment-item">
                            <div class="comment-avatar"></div>
                            <div class="comment-body">
                                <p>{{ $comment->body }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- コメント投稿フォーム -->
                <div class="comment-form">
                    <textarea placeholder="コメントを書く…" rows="3"></textarea>
                    <button class="comment-submit">コメントする</button>
                </div>

            </div>
        </div>

        <!-- リアクション -->
        <div class="reactions">
            <button class="reaction-btn">いいね💙</button>
            <button class="reaction-btn">お気に入り🌷</button>
            <button class="reaction-btn">応援💐</button>
        </div>

    </div>
</div>
@endsection
