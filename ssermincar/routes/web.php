<?php

use App\Http\Controllers\MainhomeController;
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


Route::get('/home', [MainhomeController::class, 'home'])->name('home');
Route::put('/imgedit',[MainhomeController::class, 'imgEdit'])->name('img.edit');
Route::get('/regist',[MainhomeController::class, 'regist'])->name('usernomal.regist'); //회원가입 페이지로 이동