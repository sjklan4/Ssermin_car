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
    

    @include('layout.header')

        <div class="container">
        <hr>

    <div class="mainhomebody">
            <form action="{{route('searchcar')}}" method = "POST">
                <div class="search_box">
                    <input type="text" id = "car_search">
                    <button type="submit">검색</button>
                </div>
            </form>
        
        <div class="today_car">
            <div class="today_carimg">
                <h1>이미지 부분</h1>
            </div>
            <div class="today_carinfo">
                    {{-- 아래 부분 a링크로 바꾸어서 오늘의 추천차 상세 내용으로 이동하도록 수정 --}}
                    <p>오늘의 추천차</p> 
            </div>
        </div>
    </div>

        <hr>
    <div class="footer">
        @include('layout.footer')
    </div>
    </div>
</body>
</html>