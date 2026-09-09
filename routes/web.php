<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile/{name?}', function ($name = 'Tamu') {
    return "Halo, $name!";
});

Route::get('/product/{id}', function ($id) {
    return "ID Produk: $id";
})->whereNumber('id');

Route::get('/admin/dashboard', function () {
    return 'Selamat Datang di Dashboard Admin Minimarket';
})->name('dashboard');


Route::prefix('member')->middleware('member')->group(function () {

    Route::get('/profile', function () {
        return 'Profil Member';
    });

    Route::get('/settings', function () {
        return 'Pengaturan Member';
    });
});
