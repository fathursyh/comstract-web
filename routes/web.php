<?php

use Illuminate\Support\Facades\Route;

require_once "auth-routes.php";
require_once "dashboard-routes.php";

// HOME
Route::get('/', function () {
    /* 
    data['username], data['angkatan'] -> buat navbar
    data['chart'] -> buat chart tea
    data['posts'](limit 4 posts aja) -> buat di bagian post
    data['images'](sebanyak admin mau) buat carousels di home
    */
    return view('home/index');
});
Route::get('/kegiatan', function () {
    return view('home/kegiatan');
});
Route::get('/tentang-kami', function () {
    return view('home/profile');
});

// KALO BISA CUSTOM CONTROLLER YA BIAR ENAK
// Route::middleware('auth')->group(function(){
    Route::get('/data-peserta/{tahun}', function () {
        return view('home/peserta');
    })->name('data-peserta');
// });

