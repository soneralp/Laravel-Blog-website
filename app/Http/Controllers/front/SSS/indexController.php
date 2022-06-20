<?php

namespace App\Http\Controllers\front\SSS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    function SSS () {
        return view('front.SSS.index');
    }
}
