<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
// Suggested code may be subject to a license. Learn more: ~LicenseLog:191534835.
Route::get('/', fn () => view('home'));
Route::get('/home', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/users', [Controllers\UsersController::class, 'index']);
Route::get('/users/create', [Controllers\UsersController::class, 'create']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);
//route resource for products
Route::resource('/products', Controllers\ProductController::class);
