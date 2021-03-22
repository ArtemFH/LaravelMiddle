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

Route::name('home.')->group(function () {
    Route::get('/', [\App\Http\Controllers\BenchmarkController::class, 'index'])->name('head');
});

Route::name('admin.')->group(function () {
    Route::get('/admin-panel', [\App\Http\Controllers\AdminController::class, 'index', '__construct'])->name('panel');
});

Route::name('moderator.')->group(function () {
    Route::get('/moderator-panel', [])->name('panel');
});

Route::name('user.')->group(function () {
    Route::get('/registration', [\App\Http\Controllers\UserController::class, 'registrationAvailability'])->name('registration');

    Route::get('/requestHardware', [\App\Http\Controllers\RequestHardwareController::class, 'requestHardwareAvailability'])->name('requestHardware');

    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginAvailability'])->name('login');

    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profileView'])->middleware('auth')->name('profile');

    Route::post('/registration', [\App\Http\Controllers\UserController::class, 'createUser']);

    Route::post('/requestHardware', [\App\Http\Controllers\RequestHardwareController::class, 'requestHardware']);

    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
});
