<?php

use Illuminate\Support\Facades\Route;

// ADMIN ONLY ACCESS
$dev = 'guest'; // INI GANTI KALO UDAH JADII! JADI 'auth'
Route::group(['prefix'=> 'dashboard', 'middleware' => $dev],function(){
    // ROUTES BUAT SERTIFIKASI
    Route::group(['prefix' => 'sertifikasi'],function() {
        Route::get('/', function () {
            include 'dummy.php';
            return view('dashboard/sertifikasi', [
                'data' => $data1,
            ]);
        });
    });

    // ROUTES BUAT KEGIATAN
    Route::group(['prefix' => 'kegiatan'],function() {
        Route::get('/', function () {
            return view('dashboard/kegiatan');
        });
    });

    // ROUTES BUAT PROFILE COMSTRACT YANG BISA DIEDIT
    Route::get('/profile', function () {
        return view('dashboard/profile');
    });
});
