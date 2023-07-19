<?php

use App\Models\News;
use App\Models\Anggota;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardAnggotaController;

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
    return view('home', [
        "title" => "UKM Korps Protokoler Mahasiswa Universitas Islam Malang",
        "newss" => News::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang - UKM Korps Protokoler Mahasiswa Universitas Islam Malang"
    ]);
});

Route::get('/gallery', function () {
    return view('galery', [
        "title" => "Galeri Foto - UKM Korps Protokoler Mahasiswa Universitas Islam Malang"
    ]);
});

// Sort Data All News
Route::get('/news', [NewsController::class, 'index']);

// Route Single News
Route::get('/news/{news:slug}', [NewsController::class, 'show']);



// Admin Section

Route::get('/admin', function () {
    return view('admin.dashboard');
});

// Login Section
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);


// Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

// Dashboard - Berita Acara
Route::resource('/dashboard/berita-acara', DashboardNewsController::class)->middleware('auth');

Route::get('/dashboard/berita-acara/checkSlug', [DashboardPostController::class])->middleware('auth');

// Dashboard - Anggota

