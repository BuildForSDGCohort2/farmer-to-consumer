<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController')->name('register');
Route::post('login', 'Auth\LoginController')->name('login');
Route::post('logout', 'Auth\LogoutController')->name('logout')->middleware('auth:sanctum');
