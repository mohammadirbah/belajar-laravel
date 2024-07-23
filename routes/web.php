<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/table', function () {
    $data = ['meja', 'kursi', 'baju', 'celana'];
    // return view('table');
    return view('table', compact('data'));
});