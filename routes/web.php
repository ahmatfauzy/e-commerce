<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomepageController;


Route::get('/', [HomepageController::class, 'index'])->name('home');

// Route::get('/', function () {
//     $title = "Homepage";
//     return view('web.homepage', ['title' => $title]);
// });

Route::get('/products', [HomepageController::class, 'product']);

// Route::get('products', function () {
//     $title = "Products";
//     return view("web.products", ['title' => $title]);
// });


// Route::get('product/{slug}', function ($slug) {
//     return "halaman single product - " . $slug;
// });

// Route::get('categories', function () {
//     $title = "Category";
//     return view("web.categories",['title' => $title]);
// });

// Route::get('category/{slug}', function ($slug) {
//     return "halaman single category - " . $slug;
// });

// Route::get('cart', function () {
//     $title = "Cart";
//     return view("web.cart", ['title' => $title]);
// });

// Route::get('checkout', function () {
//     $title = "co";
//     return view("web.checkout", ['title' => $title]);
// });


// Route::get('/categories', function () {
//     return('halaman kategori dalam toko');
// });


// Route::get('/orders', function () {
//     return('Halaman checkout');
// });

// Route::get('/payments', function () {
//     return('Halaman pembayaran');
// });

// Route::get('/reviews', function () {
//     return('Halaman review');
// });

// Route::get('/promos', function () {
//     return('Halaman promo');
// });

// Route::get('/products', function () {
//     return('Halaman daftar produk');
// });

// Route::get('/products/{id}', function ($id) {
//     return "Detail produk dengan ID: $id";
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('category', ProductCategoryController::class);
});
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('products', ProductController::class);
});


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
    
});

require __DIR__ . '/auth.php';