<?php

namespace App\Http\Controllers\admin\blog;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kategoriler;
use App\Models\Bloglar;
use File;
use App\Models\Yazarlar;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
use function Illuminate\Events\queueable;

class indexController extends Controller
{
    public function index()
    {
        $data = Bloglar::paginate(10);
        return view('admin.blog.index',['data' =>$data]);
    }


    public function create(){
        $yazar = Yazarlar::all();
        $kategori = Kategoriler::all();
        return view('admin.blog.create',['yazar'=>$yazar,'kategori'=>$kategori]);
    }

    public function store(Request  $request){
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['image'] = imageUpload::singleUpload(rand(1,90000),"blog",$request->file('image'));

        $insert = Bloglar::create($all);
        if ($insert){
            return redirect()->back()->with('status','blog Eklendi');
        }
        else{
            return redirect()->back()->with('status','blog Eklenemedi');
        }

    }

    public function edit($id){
        $c = Bloglar::where('id','=',$id)->count();
        if ($c!=0){
            $data = Bloglar::where('id','=',$id)->get();
            $yazar = Yazarlar::all();
            $kategori = Kategoriler::all();

            return view('admin.blog.edit',['data'=>$data,'yazar'=>$yazar,'kategori'=>$kategori]);
        }
        else{
            return redirect('/');
        }
    }


    public function update(Request $request){
        $id = $request->route('id');
        $c=Bloglar::where('id','=',$id)->count();
        if ($c!=0){
            $data = Bloglar::where('id','=',$id)->get();
            $all = $request->except('_token');
            $all['selflink']=mHelper::permalink($all['name']);

            $all['image'] = imageUpload::singleUploadUpdate(rand(1,9000),"blog",$request->file('image'),$data,"image");
            $update = Bloglar::where('id','=',$id)->update($all);

            if ($update){
                return redirect()->back()->with('status','Yayın Evi Düzenlendi');
            }
            else{
                return redirect()->back()->with('status','Yayın Evi Düzenlenemedi');
            }
        }
        else{
            return redirect('/');
        }
}


    public function delete($id){
        $c=Bloglar::where('id','=',$id)->count();
        if ($c!=0){
            $data = Bloglar::where('id','=',$id)->get();
            File::delete('public/',$data[0]['image']);
            Bloglar::where('id','=',$id)->delete();
            return redirect()->back();
        }
        else{
            return redirect('/');
        }

    }

}



