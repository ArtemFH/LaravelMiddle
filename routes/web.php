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

Route::get('/', [\App\Http\Controllers\RequestController::class, 'titleHome', 'adminAvialable'])->name('home');

Route::name('user.')->group(function () {
    Route::get('/registration', [\App\Http\Controllers\RegisterController::class, 'checkAvailability'])->name('registration');

    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'checkAvailability'])->name('login');

    Route::get('/logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');

    Route::view('/profile', 'profile')->middleware('auth')->name('profile');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});

Route::name('admin.')->group(function () {
    Route::name('panel.')->group(function () {
        Route::get('/admin-panel', [])->name('admin');
    });

    Route::name('moderator.')->group(function () {
        Route::get('/moderator-panel', [])->name('moderator');
    });
});
