<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
  return view('dashboard/sertifikasi');
});
Route::get('/dashboard/kegiatan', function () {
  return view('dashboard/kegiatan');
});
Route::get('/dashboard/profile', function () {
  return view('dashboard/profile');
});