<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
// FETCHING USER FOR SEARCH BAR
Route::post('/fetchPeserta', function (Request $request) {
    $search = $request->input('search');
    return json_encode(
        []
    );
});


// DASHBOARD-ROUTES
// ADMIN ONLY ACCESS
$dev = 'guest'; // INI GANTI KALO UDAH JADII! JADI 'auth'
Route::group(['middleware' => $dev], function () {
    Route::get('/dashboard/sertifikasi', function () {
        include 'dummy.php';
        return view('dashboard/sertifikasi', [
            'data' => $data1,
        ]);
    });
    Route::get('/dashboard/sertifikasi/tambah', function () {
        return view('dashboard/tambah');
    });
    Route::get('/dashboard/sertifikasi/edit/{id}', function (string $id) {
        include 'dummy.php';
        return view('dashboard/edit', [
            'id' => $id,
            // NANTI GANTI PAKE OBJECT YANG DIPILIH DARI DATABASE
            'data' => $data1[$id - 1],
        ]);
    });


    // ROUTES BUAT KEGIATAN
    Route::get('/dashboard/kegiatan', function () {
        include 'dummy.php';
        return view('dashboard/kegiatan', [
            'data' => $data2
        ]);
    });
    Route::get('/dashboard/kegiatan/tambah', function () {
        return view('dashboard/tambah');
    });
    Route::get('/dashboard/kegiatan/edit/{id}', function (string $id) {
        include 'dummy.php';
        return view('dashboard/edit', [
            'id' => $id,
            'data' => $data2[$id - 1]
        ]);
    });

    // ROUTES BUAT PROFILE COMSTRACT YANG BISA DIEDIT
    Route::get('/dashboard/profile', function () {
        return view('dashboard/profile');
    });
});



// AUTH-ROUTES
Route::middleware('guest')->group(function () {
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
