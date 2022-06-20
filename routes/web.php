<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bloglar;
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


Auth::routes();

Route::get('/',[App\Http\Controllers\front\indexController::class,'index'])->name('index');


Route::get('/kategori/{selflink}',[App\Http\Controllers\front\cat\indexController::class,'katgori'])->name('cat');

Route:: get ('/SSS',  [App\Http\Controllers\front\SSS\indexController::class,'SSS'])->name('SSS');
Route:: get ('/hakkimizda',  [App\Http\Controllers\front\hakkimizda\indexController::class,'hakkimizda'])->name('hakkimizda');


Route::get('/blog/detay/{selflink}',[App\Http\Controllers\front\blog\indexController::class, 'snr'])->name('blog.detay');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.','middleware'=>['auth','AdminCtrl']],function (){

    Route::get('/',[App\Http\Controllers\admin\indexController::class,"index"])->name('index');

    Route::group(['namespace'=>'yazar','prefix'=>'yazar','as'=>'yazar.'],function (){
        Route::get('/',[App\Http\Controllers\admin\yazar\indexController::class,"index"])->name('index');
        Route::get('/ekle',[App\Http\Controllers\admin\yazar\indexController::class,"create"])->name('create');
        Route::post('/ekle',[App\Http\Controllers\admin\yazar\indexController::class,"store"])->name('create.post');
        Route::get('/duzenle/{id}',[App\Http\Controllers\admin\yazar\indexController::class,"edit"])->name('edit');
        Route::post('/duzenle/{id}',[App\Http\Controllers\admin\yazar\indexController::class,"update"])->name('edit.post');
        Route::get('/sil/{id}',[App\Http\Controllers\admin\yazar\indexController::class,"delete"])->name('delete');


    });
    Route::group(['namespace'=>'blog','prefix'=>'blog','as'=>'blog.'],function (){
        Route::get('/',[App\Http\Controllers\admin\blog\indexController::class,"index"])->name('index');
        Route::get('/ekle',[App\Http\Controllers\admin\blog\indexController::class,"create"])->name('create');
        Route::post('/ekle',[App\Http\Controllers\admin\blog\indexController::class,"store"])->name('create.post');
        Route::get('/duzenle/{id}',[App\Http\Controllers\admin\blog\indexController::class,"edit"])->name('edit');
        Route::post('/duzenle/{id}',[App\Http\Controllers\admin\blog\indexController::class,"update"])->name('edit.post');
        Route::get('/sil/{id}',[App\Http\Controllers\admin\blog\indexController::class,"delete"])->name('delete');


    });
    Route::group(['namespace'=>'kategori','prefix'=>'kategori','as'=>'kategori.'],function (){
        Route::get('/',[App\Http\Controllers\admin\kategori\indexController::class,"index"])->name('index');
        Route::get('/ekle',[App\Http\Controllers\admin\kategori\indexController::class,"create"])->name('create');
        Route::post('/ekle',[App\Http\Controllers\admin\kategori\indexController::class,"store"])->name('create.post');
        Route::get('/duzenle/{id}',[App\Http\Controllers\admin\kategori\indexController::class,"edit"])->name('edit');
        Route::post('/duzenle/{id}',[App\Http\Controllers\admin\kategori\indexController::class,"update"])->name('edit.post');
        Route::get('/sil/{id}',[App\Http\Controllers\admin\kategori\indexController::class,"delete"])->name('delete');


    });
    Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function (){
        Route::get('/',[App\Http\Controllers\admin\slider\indexController::class,"index"])->name('index');
        Route::get('/ekle',[App\Http\Controllers\admin\slider\indexController::class,"create"])->name('create');
        Route::post('/ekle',[App\Http\Controllers\admin\slider\indexController::class,"store"])->name('create.post');
        Route::get('/duzenle/{id}',[App\Http\Controllers\admin\slider\indexController::class,"edit"])->name('edit');
        Route::post('/duzenle/{id}',[App\Http\Controllers\admin\slider\indexController::class,"update"])->name('edit.post');
        Route::get('/sil/{id}',[App\Http\Controllers\admin\slider\indexController::class,"delete"])->name('delete');


    });



});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
