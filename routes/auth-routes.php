<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {
  // LOGIN PAGE
  Route::get('/login', function () {
    return view('login/index');
  })->name('login');

  // ******************************************************
  
  // REGISTER PAGE
  Route::get('/register', function () {
    return view('register/index');
  })->name('register');
});