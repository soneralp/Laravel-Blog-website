<?php

namespace App\Http\Controllers\front\hakkimizda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    function hakkimizda(){
        return view('front.hakkimizda.index');
    }
}
