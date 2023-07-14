<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "UKM Korps Protokoler Mahasiswa Universitas Islam Malang"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "Tentang - UKM Korps Protokoler Mahasiswa Universitas Islam Malang"
    ]);
});

Route::get('/gallery', function () {
    return view('galery',[
        "title" => "Galeri Foto - UKM Korps Protokoler Mahasiswa Universitas Islam Malang"
    ]);
});

Route::get('/news', function () {
    return view('news',[
        "title" => "Berita Acara - UKM Korps Protokoler Mahasiswa Universitas Islam Malang"
    ]);
});

Route::get('/admin',function(){
    return view('admin.dashboard');
});

Route::get('/login',function(){
    return view('admin.login');
});