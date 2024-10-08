<?php

use Illuminate\Support\Facades\Route;
require_once "auth-routes.php";
require_once "dashboard-routes.php";

Route::get('/', function () {
    /* 
    data angkatan -> buat navbar
    data['posts'](limit 4 posts aja) -> buat di bagian post sebanyak admin mau
    */
    require_once 'dummy.php';
    return view('home/index', [
        "posts" => $posts
    ]);
});

Route::get('/kegiatan', function () {
    // PAGINATION LIMIT 8 POSTS
    // KASIH DATA POSTS KESINI SORT DARI DATE PALING BARU
    return view('home/kegiatan', []);
});
Route::get('/kegiatan/{slug}', function () {
    require_once 'dummy.php';
    return view('home/kegiatan-detail', [
        'body' => $body,
    ]);
});

Route::get('/tentang-kami', function () {
    return view('home/profile');
});

// KALO BISA CUSTOM CONTROLLER YA BIAR ENAK
// Route::middleware('auth')->group(function(){
    Route::get('/data-peserta/{tahun}', function () {
        return view('home/peserta');
    })->name('data-peserta');
// });


// FETCHING CHART DATA
Route::get('/getChartData', function () {
    require_once 'dummy.php'; // cuma dummy data
    // tolong query data count banyak peserta dalam 3 tahun terakhir. format json ya, soalnya chart nya pake js
    return json_encode($chart);
});