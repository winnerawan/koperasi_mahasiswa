<?php

Route::get('/home', 'MerchantAuth\ProductController@index')->name('home');


Route::resource('product', 'MerchantAuth\ProductController');
Route::get('sales', 'MerchantAuth\ProductController@sale_product');
Route::get('income', 'MerchantAuth\ProductController@income');

