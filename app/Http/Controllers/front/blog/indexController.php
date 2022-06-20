<?php

namespace App\Http\Controllers\front\blog;

use App\Http\Controllers\Controller;
use App\Models\Bloglar;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function snr($selflink)
    {
        $c = Bloglar::where('selflink','=',$selflink)->count();
        if ($c!=0){
            $w = Bloglar::where('selflink','=',$selflink)->get();
            return view('front.blog.index',['data' => $w]);
        }
        else{
            return redirect('/');
        }
    }
}
