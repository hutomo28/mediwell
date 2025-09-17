<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('welcome');
});

// Login & Register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

// Dashboard setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::get('/chatroom/{id}', [ChatController::class, 'room'])->name('chatroom');

Route::get('/test-doctor', function () {
    return \App\Models\Doctor::all();
});

Route::get('/doctor/{id}', [ChatController::class, 'detail'])->name('doctor.detail');

