<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', 'Auth\LoginController@create');

    Route::post('/login', 'Auth\LoginController@store')->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', 'Auth\LoginController@destroy')->name('logout');
});
