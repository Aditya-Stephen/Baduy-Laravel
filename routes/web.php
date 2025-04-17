<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;


Route::get('/', function () {
    return view('homepage');
})->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//routing ke halaman artikel
Route::get('/artikel', function () {
    return view('artikel'); 
})->name('artikel'); 
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

//routing ke produk
Route::get('/marketplace', function () {
    return view('marketplace'); 
})->name('marketplace'); 
//routing ke aboutus
Route::get('/aboutUs', function () {
    return view('aboutUs'); 
})->name('aboutUs');


//ROUTING KHUSUS ARTIKEL PAGE -->
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
//Route::get('/search', [ArticleController::class, 'search'])->name('search');