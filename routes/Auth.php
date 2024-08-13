<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Auth\Controller\AuthController;

Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class,'loginpost']);
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('register', [AuthController::class,'registerpost']);
Route::get('logout', [AuthController::class,'logout']);


