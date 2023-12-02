@extends('layouts.app')

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
        <form action="/thanks" method="post">
        @csrf
            <table class="">
                <tr>
                    <th>お名前</th>
                    <td>
                        <input type="text" name="fullname" value="{{ $contact['last_name'] }}  {{ $contact['first_name'] }}" class="text1" readonly>
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                        <input type="text" name="gender" 
                        value="<?php if ($contact['gender'] == 1){
                        echo '男性';
                        }elseif ($contact['gender'] == 2){
                        echo '女性';
                        }else{
                        echo 'その他';
                        }
                        ?>" class="text1" readonly>
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" class="">
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="text" name="email" value="{{ $contact['email'] }}" class="text1" readonly></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><input type="text" name="tel" value="{{ $contact['tel1'] }}{{ $contact['tel2'] }}{{ $contact['tel3'] }}" class="text1" readonly></td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td><input type="text" name="address" value="{{ $contact['address'] }}" class="text1" readonly></td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td><input type="text" name="building" value="{{ $contact['building'] }}" class="text1" readonly></td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                        <input type="text" name="category" 
                        value="<?php switch ($contact['categories']) {
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
                            };?>" class="text1" readonly>
                        <input type="hidden" name="category_id" value="{{ $contact['categories'] }}" class="">
                    </td>

                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <div class="text2__flame">
                            <textarea name="detail" id="" cols="40" rows="3" class="text2" readonly>{{ $contact['detail'] }}</textarea>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="button">
                <button class="submit">送信</button>
                <form action="/" method="post">
                    <input type="hidden">
                </form>
                <a href="/" class="correct">修正</a>
            </div>
        </form>
    </div>
@endsection