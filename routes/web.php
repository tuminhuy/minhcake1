<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/', function () {
    return view('welcome');
});
