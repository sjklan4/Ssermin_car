<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainhomeController extends Controller
{
    public function home(){
        return view('home');
    }
}
