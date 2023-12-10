<?php
//필요 테이블 : 회원(구매,판매), 차량정보(차량 정보 + 이미지 경로저장컬럼), 
namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\car_info;
use Illuminate\Http\Request;

class MainhomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function regist(){
        return view('regist');

    }

//임시 설정 아래 값 수정 필요
    public function search_car(){

     
        return view('home');

    }

    public function select_carmaker()
    {
        $carMakers = car_info::select('Car_maker')->distinct()->pluck('Car_maker');
        return view('home', ['carMaker' => $carMakers]);
    }

}


