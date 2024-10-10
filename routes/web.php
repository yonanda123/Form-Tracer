<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\BerandaController as LandingBerandaController;
use App\Http\Controllers\AdminPage\BerandaController as AdminBerandaController;
use App\Http\Controllers\UserPage\BerandaController as UserBerandaController;
use App\Http\Controllers\AuthController;

Route::get('/', [LandingBerandaController::class,'index'])->name('get.beranda');
Route::get('/login', [AuthController::class,'index'])->name('get.login');
Route::post('/login', [AuthController::class,'login'])->name('post.login');
Route::get('/user', [UserBerandaController::class,'index'])->name('get.user.beranda');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminBerandaController::class,'index'])->name('get.admin.beranda');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
