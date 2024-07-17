<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return redirect()->route('login');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
        Route::get('/clock', [App\Http\Controllers\UserController::class, 'clock'])->name('clock');

    });

});
