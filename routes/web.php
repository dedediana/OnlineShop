<?php

Route::get('/', function () {
    return view('landing');
});

// Product Routes
Route::get('/product', 'ProductController@index');
Route::post('/product/create', 'ProductController@create');
Route::get('product/{id}/edit', 'ProductController@edit');
Route::post('product/{id}/update', 'ProductController@editAction');
Route::get('product/{id}/delete', 'ProductController@delete');

// User Routes
Route::get('/user', 'UserController@index');
Route::post('/user/create', 'UserController@create');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/{id}/update', 'UserController@editAction');
Route::get('user/{id}/delete', 'UserController@delete');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
