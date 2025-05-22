<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;

// Halaman utama (Homepage) - dapat diakses tanpa login
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Middleware untuk halaman yang membutuhkan login
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Halaman dashboard
    Route::get('/', function () {
        return view('homepage');
    })->name('homepage');
});

//routing ke halaman artikel
//Route::get('/artikel', function () {
   // return view('artikel'); 
//})->name('artikel'); 
//Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

// Routing Artikel baru
Route::controller(ArtikelController::class)->group(function () {
    // Menampilkan daftar artikel
    Route::get('/artikel', 'index')->name('artikel');

    Route::middleware('auth')->group(function () {
        // Menyimpan artikel baru  
        Route::post('/artikel', [ArtikelController::class, 'store'])->name('artikel.store');    
        // Menampilkan form tambah artikel
        Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    });
    // nampilin detail artikel
    Route::get('/artikel/{id}', 'show')->name('artikel.show');
});

//routing ke produk
Route::get('/marketplace', function () {
    return view('marketplace'); 
})->name('marketplace'); 
//routing ke aboutus
Route::get('/aboutUs', function () {
    return view('aboutUs'); 
})->name('aboutUs');


// Routing untuk halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

// Routing untuk halaman registrasi
Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('guest');

// Rute logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('homepage');
})->name('logout');