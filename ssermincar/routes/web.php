<?php

use App\Http\Controllers\MainhomeController;
use Illuminate\Contracts\Foundation\MaintenanceMode;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//차량 검색 라우트
Route::get('/home/carselect_mklist',[MainhomeController::class, 'select_carmaker'])->name('carmakerlist');
Route::post('/searchcar', [MainhomeController::class], 'search_car')->name('searchcar');



Route::get('/home', [MainhomeController::class, 'home'])->name('home');
Route::put('/imgedit',[MainhomeController::class, 'imgEdit'])->name('img.edit');
Route::get('/regist',[MainhomeController::class, 'regist'])->name('usernomal.regist'); //회원가입 페이지로 이동

