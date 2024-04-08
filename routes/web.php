<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/user', [UserController::class, 'HalamanUser'])->name('HalamanUser');
Route::get('/login', [LoginController::class, 'HalamanLogin'])->name('HalamanLogin');
Route::get('/register', [LoginController::class, 'HalamanRegister'])->name('HalamanRegister');

// User
Route::post('/user', [UserController::class, 'UserRegister'])->name('user.UserRegister');
