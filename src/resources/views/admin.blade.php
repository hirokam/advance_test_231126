@extends('layouts.app')

@section('title')
    <title>管理画面</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Inika&family=Noto+Serif+JP:wght@200;400&display=swap" rel="stylesheet">
@endsection

@section('header')
    <div class="header__title">
        <h2>FashionablyLate</h2>
        <div class="header__nav">
            <nav>
                <button class="header__nav-button">logout</button>
            </nav>
        </div>
    </div>

@endsection

@section('content')
    <div class="content__title">
        <h2>Admin</h2>
    </div>
    <div class="content__search-group">
        <div class="content__search-text">
            <input type="text" class="text">
        </div>
        <div class="content__search-gender">
            <select name="" id="" class="gender"></select>
        </div>
        <div class="content__search-categories">
            <select name="" id="" class="categories"></select>
        </div>
        <div class="content__search-date">
            <input type="date" value="日付を選択してください" class="date">
        </div>
    </div>
    <div class="content__export-page">
        <div class="content__export">
            <button class="export">エクスポート</button>
        </div>
        <div class="content__page">
            <p>ページネーション</p>
        </div>
    </div>
    <div class="content__search-result">
        <table class="search-result-table">
            <tr class="table__header">
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
            <tr>
                <td>山田　太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td>
                    <button class="detail">詳細</button>
                </td>
            </tr>
            <tr>
                <td>山田　太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td>
                    <button class="detail">詳細</button>
                </td>
            </tr>
            <tr>
                <td>山田　太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td>
                    <button class="detail">詳細</button>
                </td>
            </tr>
        </table>
        <div class="content__reset">
            <button class="reset">リセット</button>
        </div>
    </div>

@endsection