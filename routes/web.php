<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
