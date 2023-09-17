<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pesanCotroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('popup', function () {
    return view('popup');
});


Route::get('test', function () {
    return view('test');
});

Route::resource('pesan', pesanCotroller::class);
Route::resource('registrasi', daftarController::class);
Route::resource('dashboard', dashboardController::class);
