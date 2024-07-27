<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', function () {
    $programs = ['php', 'java', 'c', 'javascript', 'dart'];
    return view('programs', ['programs' => $programs]);
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/table', function () {
    $data = ['meja', 'kursi', 'baju', 'celana', 'laptop'];
    // return view('table');
    return view('table', compact('data'));
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::resource('siswa', SiswaController::class);
