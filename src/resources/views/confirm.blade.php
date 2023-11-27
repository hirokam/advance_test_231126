@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@section('title')
    <title>お問い合わせフォーム確認ページ</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" >
@endsection


@section('header')
    <div class="header__title">
        <h2>FashionablyLate</h2>
    </div>

@endsection


@section('content')
    <div class="content__title">
        <h2>Confirm</h2>
    </div>
    <div class="confirm__inner">
        <form action="" class="">
            <table class="">
                <tr>
                    <th>お名前</th>
                    <td><input type="text" value="サンプル" class="text1"></td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td><input type="text" value="サンプル" class="text1"></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="text" value="サンプル" class="text1"></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><input type="text" value="サンプル" class="text1"></td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td><input type="text" value="サンプル" class="text1"></td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td><input type="text" value="サンプル" class="text1"></td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td><input type="text" value="サンプル" class="text1"></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><input type="text" value="サンプル" class="text2"></td>
                </tr>
            </table>
            <div class="button">
                <button class="submit">送信</button>
                <a href="" class="correct">修正</a>
            </div>
        </form>
    </div>
@endsection