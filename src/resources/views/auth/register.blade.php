<!-- ログイン画面 -->
@extends('layouts.auth')

@section('title','会員登録')

@section('content')
<form action="/login" method="post" class="center">
    @csrf
    <div class="form__inner">
        <h1 class="auth__title">୨୧ Register ୨୧</h1>
        <label for="name" class="form__label">ユーザー名</label>
        <input name="name" id="name" type="text" class="input" value="{{ old('name') }}">
        <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
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
        <label for="password_confirm" class="form__label">パスワード確認</label>
        <input name="password_confirmation" id="password_confirm" type="password" class="input">
        <div class="btn-row">
            <a href="/login" class="btn btn--sub">ログイン</a>
            <button class="btn btn--main">登録</button>
        </div>
    </div>
</form>
@endsection