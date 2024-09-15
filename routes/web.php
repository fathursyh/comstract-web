<?php

use Illuminate\Support\Facades\Route;

require_once "auth-routes.php";
require_once "dashboard-routes.php";

// HOME
Route::get('/', function () {
    // butuh data['username], data['angkatan']
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

