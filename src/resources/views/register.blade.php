@extends('layouts.app')

@section('title')
    <title>ユーザ登録ページ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Inika&family=Noto+Serif+JP:wght@200;400&display=swap" rel="stylesheet">
@endsection

@section('header')
    <div class="header__title">
        <h2>FashionablyLate</h2>
        <div class="header__nav">
            <nav>
                <form action="/login">
                    <button class="header__nav-button">login</button>
                </form>
            </nav>
        </div>
    </div>

@endsection

@section('content')
    <div class="content__background">
        <div class="content__title">
            <h2>Register</h2>
        </div>
        <div class="content__register-flame">
            <div class="content__register-inner-group">
                <form action="/login" method="post" class="">
                @csrf
                    <div class="content__register-inner">
                        <p class="content__register-inner-index-name">お名前</p>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="例:山田 太郎" class="content__register-inner-name">
                        @error('name')
                        <p class="error-message">{{$errors->first('name')}}</p>
                        @enderror
                    </div>
                    <div class="content__register-inner">
                        <p class="content__register-inner-index-email">メールアドレス</p>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="例:test@example.com" class="content__register-inner-email">
                        @error('email')
                        <p class="error-message">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                    <div class="content__register-inner">
                        <p class="content__register-inner-index-password">パスワード</p>
                        <input type="text" name="password" value="" placeholder="例:coachtech1106" class="content__register-inner-pass">
                        @error('password')
                        <p class="error-message">{{$errors->first('password')}}</p>
                        @enderror
                    </div>
                    <div class="content__register-inner-button">
                        <button class="register-button">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection