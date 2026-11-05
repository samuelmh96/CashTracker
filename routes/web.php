<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('auth/login',[LoginController::class, 'index'])->name('login');

Route::get('auth/register',[RegisterController::class, 'index'])->name('register');
Route::post('auth/register',[RegisterController::class, 'store'])->name('register.store');

Route::get('/email/veryfy/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('dashboard')->with('success', '¡Tu correo electrónico ha sido verificado con éxito! Ahora puedes acceder a tu cuenta.');
})->middleware('auth', 'signed')->name('verification.verify');

Route::get('/email/verify', function () {
     return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
