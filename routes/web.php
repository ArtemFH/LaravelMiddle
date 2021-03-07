<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'base')->name('base');

Route::view('/home', 'home', ['title' => 'Silicon Power'])->name('home');

Route::name('user.')->group(function () {
    Route::get('/registration', [\App\Http\Controllers\RegisterController::class, 'checkAvailability'])->name('registration');

    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'checkAvailability'])->name('login');

    Route::get('/logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');

    Route::view('/profile', 'private')->middleware('auth')->name('private');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});
