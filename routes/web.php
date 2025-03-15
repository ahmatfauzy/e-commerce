<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return('Halaman utama');
});

Route::get('/categories', function () {
    return('halaman kategori dalam toko');
});


Route::get('/orders', function () {
    return('Halaman checkout');
});

Route::get('/payments', function () {
    return('Halaman pembayaran');
});


Route::get('/reviews', function () {
    return('Halaman review');
});

Route::get('/promos', function () {
    return('Halaman promo');
});

Route::get('/products', function () {
    return('Halaman daftar produk');
});

Route::get('/products/{id}', function ($id) {
    return "Detail produk dengan ID: $id";
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';