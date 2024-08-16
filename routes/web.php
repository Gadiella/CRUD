<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashbord', function () {
        return view('dashbord');
    })->name('dashbord');
});


Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/', [AuthenticationController::class, 'login'])->name('login');

Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');