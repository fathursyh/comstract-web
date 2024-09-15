<?php

use Illuminate\Support\Facades\Route;

// ADMIN ONLY ACCESS
// Route::middleware('auth')->group(function(){
  Route::get('/dashboard', function () {
    return view('dashboard/sertifikasi');
  })->name('sertifikasi');
  Route::get('/dashboard/kegiatan', function () {
    return view('dashboard/kegiatan');
  })->name('kegiatan');
  Route::get('/dashboard/profile', function () {
    return view('dashboard/profile');
  })->name('profile');
// });
