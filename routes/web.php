<?php

use Illuminate\Support\Facades\Route;

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

//routingb ke halaman artikel
Route::get('/artikel', function () {
    return view('artikel'); 
})->name('artikel'); 

Route::get('/marketplace', function () {
    return view('marketplace'); 
})->name('marketplace'); 

Route::get('/aboutUs', function () {
    return view('aboutUs'); 
})->name('aboutUs');