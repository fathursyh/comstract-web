<?php

use Illuminate\Support\Facades\Route;

require_once "auth-routes.php";
require_once "dashboard-routes.php";

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
Route::get('/data-peserta', function () {
    return view('home/peserta');
});

