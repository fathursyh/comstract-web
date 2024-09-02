<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/artikel',[ArtikelController::class,'index'])->name('halamanArtikel');
Route::get('/artikelCari/{id}',[ArtikelController::class])->name('cariArtikel');
Route::put('/artikelEdit/{id}',[ArtikelController::class,'update'])->name('editArtikel');
Route::delete('/artikelHapus/{id}',[ArtikelController::class,'destroy'])->name('deleteArtikel');
