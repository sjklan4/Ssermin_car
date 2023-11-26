<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/header.css')}}">

    @section('css')

</head>
<body>

    @include('layout.header')
    @yield('homecontents')
    @include('layout.footer')
    
</body>
</html>