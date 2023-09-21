<?php
//필요 테이블 : 회원(구매,판매), 차량정보(차량 정보 + 이미지 경로저장컬럼), 
namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

class MainhomeController extends Controller
{
    public function home(){
        return view('home');
    }


    public function imgEdit(Request $req){
        if ($req->hasFile('carimg')) {
            $img = $req->file('carimg');
            $fileName = $req->file('carimg')->getClientOriginalName();

            $img->move(public_path('carimg'), $fileName);

            $imgePath = 'carimg/' . $carimg;

            $carlist->d_img_path = $imgePath;
            $carlist->save();

        }

        return redirect()->route('home');
    }
}


