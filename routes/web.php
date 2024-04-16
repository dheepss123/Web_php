<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LogOutController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');

// Login Form
Route::get('/login', [LoginController::class, 'HalamanLogin'])->name('login');
// User Register
Route::get('/register', [RegisterController::class, 'HalamanRegister'])->name('HalamanRegister');
// Get User
Route::get('/user', [UserController::class, 'User'])->name('User')->middleware('auth');
// Show User
Route::get('/user{user:id}', [UserController::class, 'ShowUser'])->name('user.ShowUser');

// User Register
Route::post('/user/store', [RegisterController::class, 'UserRegister'])->name('UserRegister');
// Halaman User Edit
Route::get('/user{user:id}/edit', [UserController::class, 'HalamanEditUser'])->name('user.HalamanEditUser');
// Update User
Route::put('/user/{user:id}', [UserController::class, 'Update'])->name('user.Update');
// User Delete
Route::delete('/user{user:id}', [UserController::class, 'DeleteUser'])->name('user.DeleteUser');

// User Auth
Route::post('login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');
// Logout
Route::post('logout', LogOutController::class)-> name('logout')->middleware('auth');
