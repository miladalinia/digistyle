<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('list', 'AdminController@list')->name('adminsList');

    //users
    Route::prefix('users')->group(function () {
        Route::get('list', 'UserController@list')->name('usersList');
    });

    //products
    Route::prefix('products')->group(function () {
        Route::get('list', 'ProductController@list')->name('productsList');
    });

});

