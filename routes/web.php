<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

// Home
Route::get('/home', 'HomeController@index')->name('home');

// Orders
Route::get('/orders/create', 'OrderController@create')->name('create_order');

// Categories
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/create', 'CategoryController@create')->name('create.category');

// Products
Route::post('/products', 'ProductController@store');
Route::get('/products/create', 'ProductController@create')->name('create.product');

// Ingredients
Route::post('/ingredients', 'IngredientController@store');
Route::get('/ingredients/create', 'IngredientController@create')->name('create.ingredient');
