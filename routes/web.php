<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
