<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('login', LoginController::class)->name('admin.login.post');

Route::middleware('isAdmin')->group(function () {

    Route::post('logout', function () {
        Auth::logout();
        return to_route('admin.login');
    })->name('admin.logout');

    Route::get('/', function () {
        return view('admin.admin-dashboard');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        return view('admin.admin-users');
    })->name('admin.users');

    Route::get('/users/create', [UserController::class, 'index'])->name('admin.users.form');

    Route::post('/users/create', [UserController::class, 'createUser'])->name('admin.users.create');
});
