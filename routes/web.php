<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
// Suggested code may be subject to a license. Learn more: ~LicenseLog:191534835.
// Route::get('/', fn () => view('home'));
Route::get('/', Controllers\HomeController::class);
Route::get('/home', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);
// Route::get('/product', [Controllers\UsersController::class, 'index']);
// Route::get('/product/create', [Controllers\UsersController::class, 'create']);
// Route::post('/users', [Controllers\UsersController::class, 'store']);
// Route::get('/users/{user:id}', [Controllers\UsersController::class, 'show']);
// Route::get('/users/{user:id}/edit', [Controllers\UsersController::class, 'edit']);
// Route::put('/users/{user:id}', [Controllers\UsersController::class, 'update']);
// Route::delete('/users/{user:id}', [Controllers\UsersController::class, 'destroy']);
Route::resource('/users', Controllers\UsersController::class);
Route::resource('/products', Controllers\ProductController::class);
Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login');
Route::post('login', [Controllers\LoginController::class, 'authenticate']);
