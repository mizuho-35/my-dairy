<!-- ログイン画面 -->
@extends('layouts.auth')

@section('title','ログイン')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/auth/common.css') }}">
@endsection

@section('content')
<form action="/login" method="post" class="form center">
    @csrf
    <h1 class="auth__title">Login</h1>
    <label for="mail" class="form__label">メールアドレス</label>
    <input name="email" id="email" type="email" class="input" value="{{ old('email') }}">
    <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
    </div>
    <label for="password" class="form__label">パスワード</label>
    <input name="password" id="password" type="password" class="input">
    <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
    </div>
    <button class="btn--main">ログイン</button>
    <a href="/register" class="btn--sab">新規登録</a>
    <!-- <a href="/register" class="link">パスワードをお忘れの方はこちら</a> -->
</form>
@endsection