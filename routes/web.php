<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('/', function () {
    return view('welcome');
});

// 管理画面（admin/配下に置くことを想定しています。groupメソッドでまとめると便利です。）

Route::prefix('admin')->group(function () {
    Route::get('/register', [Admin\RegisterController::class, 'index'])->name('admin.register.index');
    Route::post('/register', [Admin\RegisterController::class, 'register'])->name('admin.register.register');


    Route::get('/login', [Admin\LoginController::class, 'index'])->name('admin.login.index');
    Route::post('/login', [Admin\LoginController::class, 'login'])->name('admin.login.login');
    Route::get('/logout', [Admin\LoginController::class, 'logout'])->name('admin.login.logout');


    Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
});
