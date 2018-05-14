<?php

Route::get('/', function () {
    return view('landing_main_page');
})->name('mood');

Route::get('/product', function (){
    return view('product.landing_product_page');
})->name('product');
