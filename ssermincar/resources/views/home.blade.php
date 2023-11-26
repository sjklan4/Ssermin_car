<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body>
    <div class="container">
        <div class="header">
            @include('layout.header')
        </div>
        <hr>

        <div class="mainhomebody">
            <p>여기 메인페이지</p>
        </div>
        
        <hr>
        <div class="footer">
            @include('layout.footer')
        </div>
    </div>
</body>
</html>