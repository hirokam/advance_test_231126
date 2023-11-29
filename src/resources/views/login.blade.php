@extends('layouts.app')

@section('title')
    <title>ログインページ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Inika&family=Noto+Serif+JP:wght@200;400&display=swap" rel="stylesheet">
@endsection

@section('header')
    <div class="header__title">
        <h2>FashionablyLate</h2>
        <div class="header__nav">
            <nav>
                <form action="/register">
                    <button class="header__nav-button">register</button>
                </form>
            </nav>
        </div>
    </div>

@endsection

@section('content')
    <div class="content__background">
        <div class="content__title">
            <h2>Login</h2>
        </div>
        <div class="content__login-flame">
            <div class="content__login-inner-group">
                <div class="content__login-inner">
                    <p class="content__login-inner-index-email">メールアドレス</p>
                    <input type="email" value="" placeholder="例:test@example.com" class="content__login-inner-email">
                    <p class="error-message">(error)メールアドレスを入力してください</p>
                </div>
                <div class="content__login-inner">
                    <p class="content__login-inner-index-password">パスワード</p>
                    <input type="text" value="" placeholder="例:coachtech1106" class="content__login-inner-pass">
                    <p class="error-message">(error)パスワードを入力してください</p>
                </div>
                <div class="content__login-inner-button">
                    <button class="login-button">ログイン</button>
                </div>
            </div>
        </div>
    </div>
@endsection