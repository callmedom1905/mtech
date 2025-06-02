<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//dùng khi có api đăng ký, đăng nhập
// Route::middleware('auth:sanctum')->group(function () {
//     Route::resource('user', UserController::class);
//  });


Route::resource('product', ProductController::class)->middleware(['auth:sanctum', 'admin']);
// ->middleware('auth:sanctum\\');
//có api login & register mới dùng auth sanctum

Route::resource('user', UserController::class)->middleware(['auth:sanctum', 'admin']);

Route::resource('category', CategoryController::class)->middleware(['auth:sanctum', 'admin']);

Route::resource('order', OrderController::class)->middleware(['auth:sanctum', 'admin']);

Route::get('user', [UserController::class, 'index'])->middleware(['auth:sanctum', 'admin']);

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware(middleware: 'auth:sanctum');
