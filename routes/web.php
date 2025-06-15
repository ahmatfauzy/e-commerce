<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\CartController;


Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/products', [HomePageController::class, 'products']);
Route::get('product/{slug}', [HomePageController::class, 'product'])->name('product.show');
Route::get('categories', [HomePageController::class, 'categories']);
Route::get('category/{slug}', [HomePageController::class, 'category']);

Route::get('cart', [HomePageController::class, 'cart'])->name('cart.index');
Route::get('checkout', [HomePageController::class, 'checkout'])->name('checkout.index');

Route::group(['middleware' => ['is_customer_login']], function () {
    Route::controller(CartController::class)->group(function () {
        Route::post('cart/add', 'add')->name('cart.add');
        Route::delete('cart/remove/{id}', 'remove')->name('cart.remove');
        Route::patch('cart/update/{id}', 'update')->name('cart.update');
    });
});



Route::group(['prefix' => 'customer'], function () {
    Route::controller(CustomerAuthController::class)->group(function () {
        Route::group(['middleware' => 'check_customer_login'], function () {

            //tampilkan halaman login
            Route::get('login', 'login')->name('customer.login');
            //aksi login
            Route::post('login', 'store_login')->name('customer.store_login');
            //tampilkan halaman register
            Route::get('register', 'register')->name('customer.register');
            //aksi register
            Route::post('register', 'store_register')->name('customer.store_register');
        });

        //aksi logout
        Route::post('logout', 'logout')->name('customer.logout');
    });
});

Route::group(['prefix' => 'costumer'], function () {

    // tampilkan halaman login dan register
    Route::get('login', [HomepageController::class, 'login']);
    Route::get('register', [HomepageController::class, 'login']);
});

Route::prefix('dashboard')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('category', ProductCategoryController::class, ['as' => 'dashboard']);
        Route::resource('products', ProductController::class, ['as' => 'dashboard']);
    });



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});



require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     $title = "Homepage";
//     return view('web.homepage', ['title' => $title]);
// });


// Route::group(['prefix' => 'costumer'], function () {
    
//     // tampilkan halaman login dan register
//     Route::get('loginn', [HomepageController::class, 'login']);
//     Route::get('register', [HomepageController::class, 'login']);
// });


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

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::prefix('dashboard')->name('dashboard.')->group(function () {
//     Route::resource('category', ProductCategoryController::class);
// });

// Route::prefix('dashboard')->name('dashboard.')->group(function () {
//     Route::resource('products', ProductController::class);
// });


// Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//     Route::resource('category', ProductCategoryController::class);
//     Route::resource('products', ProductController::class);
// });