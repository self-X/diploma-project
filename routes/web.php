<?php
Route::get('/', 'MoodPageController@index')->name('mood');

Route::get('/products/{category}', 'ProductController@index')->name('product');

Route::get('/products/{category}/{product}', 'ProductController@show');
Route::post('/products/{category}/{product}', 'ProductController@buy');
Route::post('{category}/{product}', 'ProductController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


