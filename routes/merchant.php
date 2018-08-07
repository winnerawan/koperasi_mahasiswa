<?php

Route::get('/home', 'MerchantAuth\ProductController@index')->name('home');


Route::resource('product', 'MerchantAuth\ProductController');
Route::get('sales', 'MerchantAuth\ProductController@sale_product');
Route::get('income', 'MerchantAuth\ProductController@income');
Route::get('info', 'MerchantAuth\ProductController@info');
Route::get('change_password', 'MerchantAuth\AccountController@index');
Route::put('change_password/update', 'MerchantAuth\AccountController@update')->name('password.update');



