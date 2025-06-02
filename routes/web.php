<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/product-list', [PageController::class, 'productList']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/cart', [CartController::class, 'cart']);

Route::get('/product-detail/{id}', [ProductController::class, 'detail']);

Route::get('/search', [ProductController::class,'search']);

Route::get('/cart/{id}', [CartController::class, 'addToCart']);

Route::get('/cart_delete/{id}', [CartController::class, 'cartDelete']);

Route::get('/product_category/{id}', [ProductController::class, 'productCategory']);

Route::get('/home', [PageController::class, 'home'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/checkout', [PageController::class, 'checkout']);

    Route::get('/account', [UserController::class, 'account']);

    Route::get('/admin', action: [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware(['auth', 'admin']);

});

require __DIR__.'/auth.php';
