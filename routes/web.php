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

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::name('user.')->group(function () {
    Route::get('/registration', [\App\Http\Controllers\UserController::class, 'registrationAvailability'])->name('registration');

    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginAvailability'])->name('login');

    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

    Route::post('/registration', [\App\Http\Controllers\UserController::class, 'createUser']);

    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);

    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profileView'])->middleware('auth')->name('profile');
});

Route::name('admin.')->group(function () {
    Route::get('/admin-panel', [\App\Http\Controllers\AdminController::class, 'index'])->name('panel');
});

Route::name('moderator.')->group(function () {
    Route::get('/moderator-panel', [])->name('panel');
});
