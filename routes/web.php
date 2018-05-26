<?php

Route::get('/', 'MoodPageController@index')->name('mood');
Route::get('/{category}', 'ProductController@index')->name('product');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


