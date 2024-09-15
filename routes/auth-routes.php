<?php

use Illuminate\Support\Facades\Route;

// LOGIN PAGE
Route::get('/login', function () {
  return view('login/index');
})->middleware('guest')->name('login');

// REGISTER PAGE
Route::get('/register', function () {
  return view('register/index');
})->middleware('guest')->name('register');