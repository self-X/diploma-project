<?php

Route::get('/', 'MoodPageController@index')->name('mood');

Route::get('/product', function (){
    return view('product.landing_product_page');
})->name('product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
