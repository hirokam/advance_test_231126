@extends('layouts.app')

@section('title')
    <title>サンクスページ</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Inika&family=Noto+Serif+JP:wght@200;400&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="thanks-icon">
        <h2>Thank you</h2>
    </div>

    <div class="message-button__group">
        <p>お問い合わせありがとうございました</p>
        <form action="/">
            <button class="home" >HOME</button>
        </form>
    </div>
@endsection