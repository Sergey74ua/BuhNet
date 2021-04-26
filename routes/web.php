<?php

use Illuminate\Support\Facades\Route;

// Guest
Route::any('/', [App\Http\Controllers\GuestController::class, 'index']);
Route::get('about', [App\Http\Controllers\GuestController::class, 'page'])->name('about');
Route::get('calc', [App\Http\Controllers\GuestController::class, 'calc'])->name('calc');
Route::get('tariff', [App\Http\Controllers\GuestController::class, 'page'])->name('tariff');
Route::get('blog', [App\Http\Controllers\GuestController::class, 'blog'])->name('blog');
Route::get('help', [App\Http\Controllers\GuestController::class, 'blog'])->name('help');
Route::get('catalog', [App\Http\Controllers\GuestController::class, 'catalog'])->name('catalog');
Route::get('card/{id}', [App\Http\Controllers\GuestController::class, 'card'])->name('card');

Auth::routes();

// User
Route::get('profile', [App\Http\Controllers\UserController::class, 'user_get'])->name('user_get');
Route::post('profile', [App\Http\Controllers\UserController::class, 'user_post'])->name('user_post');

// Cabinet
Route::get('cabinet', [App\Http\Controllers\HomeController::class, 'cabinet']);

Route::get('company', [App\Http\Controllers\HomeController::class, 'company_get'])->name('company');
Route::post('company', [App\Http\Controllers\HomeController::class, 'company_post'])->name('company_post');

Route::get('operation', [App\Http\Controllers\HomeController::class, 'operation_get'])->name('operation_get');
Route::post('operation', [App\Http\Controllers\HomeController::class, 'operation_post'])->name('operation_post');

// Admin
Route::get('admin/{page?}', [App\Http\Controllers\AdminController::class, 'admin_get'])->name('admin_get');
Route::post('admin/{data?}', [App\Http\Controllers\AdminController::class, 'admin_post'])->name('admin_post');
