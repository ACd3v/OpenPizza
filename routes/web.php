<?php

use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Home
Route::get('/', function () {
    $users = count(User::all());
    $orders = count(Order::all());

    // if (Auth::check()) {
    if (isset(auth()->user()->role)) {
        if (auth()->user()->role == 'admin') {
            return view('admin.home', compact('users', 'orders'));
        } elseif (auth()->user()->role == 'user') {
            return view('users.home');
        } else {
            abort(404, 'Pagina non trovata');
        }
    } else {
        return view('auth.login');
    }
})->name('home');

// Orders
Route::post('/orders', 'OrderController@store');
Route::get('/orders', 'OrderController@index')->name('index.order');
Route::get('/orders/create', 'OrderController@create')->name('create.order');
Route::get('/orders/{order}', 'OrderController@show')->name('show.order');

// Categories
Route::post('/categories', 'CategoryController@store');
Route::get('/categories', 'CategoryController@index')->name('index.category');
Route::get('/categories/create', 'CategoryController@create')->name('create.category');
Route::get('/categories/{category}', 'CategoryController@show')->name('show.category');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('edit.category');
Route::put('/categories/{category}', 'CategoryController@update');

// Products
Route::post('/products', 'ProductController@store');
Route::get('/products', 'ProductController@index')->name('index.product');
Route::get('/products/create', 'ProductController@create')->name('create.product');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('edit.product');
Route::put('/products/{product}', 'ProductController@update');

// Ingredients
Route::post('/ingredients', 'IngredientController@store');
Route::get('/ingredients', 'IngredientController@index')->name('index.ingredient');
Route::get('/ingredients/create', 'IngredientController@create')->name('create.ingredient');

// Users
Route::get('/users', 'UserController@index')->name('index.user');
Route::get('/users/{user}', 'UserController@show')->name('show.user');
