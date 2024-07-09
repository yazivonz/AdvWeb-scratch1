<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workspace', function () {
    return view('workspace');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/products', function () {
    return view('products');
});




/* Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); */

