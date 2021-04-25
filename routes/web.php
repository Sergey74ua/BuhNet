<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GuestController::class, 'welcome']);

Auth::routes();

// User
Route::get('profile', [App\Http\Controllers\UserController::class, 'user_get'])->name('user');
Route::post('profile', [App\Http\Controllers\UserController::class, 'user_post'])->name('date');

// Cabinet (ВСЕ ПЕРЕДЕЛАТЬ)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('company', [App\Http\Controllers\HomeController::class, 'new_company'])->name('forms');
Route::post('company', [App\Http\Controllers\HomeController::class, 'new_company'])->name('forms');

// Admin
Route::get('admin/{page?}', [App\Http\Controllers\AdminController::class, 'admin_get'])->name('page');
Route::post('admin/{date?}', [App\Http\Controllers\AdminController::class, 'admin_post'])->name('date');