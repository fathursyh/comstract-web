<?php

use Illuminate\Support\Facades\Route;

// ADMIN ONLY ACCESS
$dev = 'guest'; // INI GANTI KALO UDAH JADII! JADI 'auth'
Route::group(['prefix'=> 'dashboard', 'middleware' => $dev],function(){
    // ROUTES BUAT SERTIFIKASI
    Route::group(['prefix' => 'sertifikasi'],function() {
        // PAGINATION LIMIT 6 ITEM PER PAGE
        Route::get('/', function () {
            include 'dummy.php';
            return view('dashboard/sertifikasi', [
                'data' => $data1,
            ]);
        });
        Route::get('/tambah', function () {
            return view('dashboard/tambah');
        });
        Route::get('/edit/{id}', function (string $id) {
            include 'dummy.php';
            return view('dashboard/edit', [
                'id' => $id,
                // NANTI GANTI PAKE OBJECT YANG DIPILIH DARI DATABASE
                'data' => $data1[$id-1],
            ]);
        });
    });
    
    // ROUTES BUAT KEGIATAN
    Route::group(['prefix' => 'kegiatan'],function() {
        Route::get('/', function () {
            include 'dummy.php';
            return view('dashboard/kegiatan', [
                'data' => $data2
            ]);
        });
        Route::get('/tambah', function () {
            return view('dashboard/tambah');
        });
        Route::get('/edit/{id}', function (string $id) {
            include 'dummy.php';
            return view('dashboard/edit', [
                'id' => $id,
                'data' => $data2[$id-1]
            ]);
        });
    });

    // ROUTES BUAT PROFILE COMSTRACT YANG BISA DIEDIT
    Route::get('/profile', function () {
        return view('dashboard/profile');
    });
});
