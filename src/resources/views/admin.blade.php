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
            <input type="text" placeholder="名前やメールアドレスを入力してください" class="text">
            <button type="submit" class="search__submit" value=""></button>
        </div>
        <div class="content__search-gender">
            <form action="/admin" method="post">
            @csrf
                <select name="gender" id="" class="gender">
                    <option value="" disabled selected style="display:none;">性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </form>
        </div>
        <div class="content__search-categories">
            <select name="categories" id="" class="categories">
                <option value="" disabled selected style="display:none;">お問い合わせの種類</option>
                <option value="1">1.商品のお届けについて</option>
                <option value="2">2.商品の交換について</option>
                <option value="3">3.商品トラブル</option>
                <option value="4">4.ショップへのお問い合わせ</option>
                <option value="5">5.その他</option>
            </select>
        </div>
        <div class="content__search-date">
            <input type="date" value="" placeholder="日付を選択してください" class="date">
        </div>
    </div>
    <div class="content__export-page">
        <div class="content__export">
            <button class="export">エクスポート</button>
        </div>
        <div class="content__page">
            <p>{{$params->links()}}</p>
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
            @foreach ($params as $param)
            <tr>
                <td>{{ $param['last_name'] }} {{$param['first_name']}}</td>
                <td><?php if($param['gender'] == 1) {
                    echo '男性';
                }elseif($param['gender'] == 2) {
                    echo '女性';
                }else {
                    echo 'その他';
                } ?></td>
                <td>{{ $param['email'] }}</td>
                <td><?php switch ($param['category_id']) {
                            case (1):
                            echo "1.商品のお届けについて";
                            break;
                            case (2):
                            echo "2.商品の交換について";
                            break;
                            case (3):
                            echo "3.商品トラブル";
                            break;
                            case (4):
                            echo "4.ショップへのお問い合わせ";
                            break;
                            case (5):
                            echo "5.その他";
                            break;
                            };?></td>
                <td>
                    <button class="detail">詳細</button>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="content__reset">
            <form action="/admin">
                <button class="reset">リセット</button>
            </form>
        </div>
    </div>

@endsection