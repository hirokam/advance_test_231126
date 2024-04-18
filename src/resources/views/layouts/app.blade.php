<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}" >
    <link rel="stylesheet" href="{{asset('css/common.css')}}" >
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Inika&display=swap" rel="stylesheet">
</head>

<body>
    <div class="base">
        <header>
            @yield('header')
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>