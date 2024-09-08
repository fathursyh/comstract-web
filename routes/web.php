<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/register', [UserController::class, 'store'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::get('/pageregister', [UserController::class, 'index'])->name('registers');
Route::get('/pagelogin', [UserController::class, 'indexs'])->name('logins');
