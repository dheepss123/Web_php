<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');

// Login Form
Route::get('/login', [LoginController::class, 'HalamanLogin'])->name('HalamanLogin');

// User Register
Route::get('/register', [LoginController::class, 'HalamanRegister'])->name('HalamanRegister');
// Get User
Route::get('/user', [UserController::class, 'User'])->name('User');
// Show User
Route::get('/user{user:id}', [UserController::class, 'ShowUser'])->name('ShowUser');

// User Register
Route::post('/user/store', [UserController::class, 'UserRegister'])->name('UserRegister');
// User Edit
Route::get('/user{user:id}/edit', [UserController::class, 'HalamanEditUser'])->name('HalamanEditUser');
Route::put('/user{user:id}', [UserController::class, 'EditUser'])->name('EditUser');
// User Delete
Route::delete('/user{user:id}', [UserController::class, 'DeleteUser'])->name('DeleteUser');

