<?php

use Illuminate\Support\Facades\Route;

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

// LOGIN PAGE
Route::get('/login', function () {
    return view('login/index');
})->middleware('guest')->name('login');

// REGISTER PAGE
Route::get('/register', function () {
    return view('register/index');
})->middleware('guest')->name('register');
