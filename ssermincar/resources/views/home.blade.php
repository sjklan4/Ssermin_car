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

                <div class="my_carsearch">
                    <div class="search_name">
                        <p class="mycar_search_title">
                            SSERMIN
                            <span class="mycar_title">
                                내 차 고르기
                            </span>
                        </p>
                    </div>
                    <div class="search_list_name"> 
                        <ul class="search_list_title">
                            <li class="search_detail">국산</li>
                            <li class="search_detail">수입</li>
                            <li class="search_detail">화물</li>
                            <li class="search_detail">특장</li>
                            <li class="search_detail">튜닝</li>
                            <li class="search_detail">금액별</li>
                        </ul>
                    </div>
                    <div class="search_box">
                        {{-- 차량 모델정보 DB에서 가져오기 foreach로 option value지정 --}}
                        {{-- 같은 방식으로 세부 모델도 DB에서 받아오기 --}}
                        <ul class="search_list_title">
                            <li class="search_detail">
                                <select name="domproduct" id="domproduct">
                                    <option value="">제조사</option>

                                    @foreach($carMaker as $carMaker)
                                        <option value="{{ $carMaker }}">{{ $carMaker }}</option>
                                    @endforeach

                                </select>
                            </li>
                            <li class="search_detail">
                                <select name="domproduct" id="domproduct">
                                    <option value="">차량모델</option>
                                    <option value="hyundai">현대</option>
                                    <option value="kia">기아</option>
                                    <option value="kg">KG(쌍용)</option>
                                    <option value="chevorlet">쉐보레</option>
                                    <option value="renault">르노</option>
                                </select>
                            </li>
                            <li class="search_detail">
                                <select name="domproduct" id="domproduct">
                                    <option value="">세부모델</option>
                                    <option value="hyundai">현대</option>
                                    <option value="kia">기아</option>
                                    <option value="kg">KG(쌍용)</option>
                                    <option value="chevorlet">쉐보레</option>
                                    <option value="renault">르노</option>
                                </select>
                            </li>
                            <li class="search_detail">
                                <button>
                                    찾기 버튼 부분
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
       

        </div>
    </div>
    
      
   
    </div>
    <hr>
        <div class="footer">
            @include('layout.footer')
        </div>
</body>
</html>