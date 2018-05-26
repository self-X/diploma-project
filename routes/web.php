<?php

Route::get('/', 'MoodPageController@index')->name('mood');
Route::get('/products/{category}', 'ProductController@index')->name('product');
Route::get('/products/{category}/{product}', 'ProductController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


