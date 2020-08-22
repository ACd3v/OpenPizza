<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders/create', 'OrderController@create')->name('create_order');

Route::post('/categories', 'CategoryController@store');
Route::get('/categories/create', 'CategoryController@create')->name('create.category');

Route::post('/products', 'ProductController@store');
Route::get('/products/create', 'ProductController@create')->name('create.product');

Route::get('/products', 'CategoryController@index')->name('index.product');
