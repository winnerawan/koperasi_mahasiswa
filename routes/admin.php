<?php
 Route::get('/home', 'AdminAuth\DashboardController@dashboard')->name('home');

Route::resource('admin', 'AdminAuth\AdminController');
Route::resource('category', 'AdminAuth\CategoryController');
Route::resource('product', 'AdminAuth\ProductController');
Route::resource('merchant', 'AdminAuth\MerchantController');
Route::resource('customer', 'AdminAuth\CustomerController');
Route::resource('promo', 'AdminAuth\PromoController');
Route::resource('payment', 'AdminAuth\PaymentController');
Route::resource('tax', 'AdminAuth\TaxController');
Route::get('profit', 'AdminAuth\ProfitController@index');
//Route::get('create_sale', 'AdminAuth\ProfitController@index');

Route::get('sales', 'AdminAuth\ProductController@sales');
Route::get('sales_detail/{id}', 'AdminAuth\ProductController@sales_detail');
Route::get('invoice/{id}', 'AdminAuth\ProductController@invoice');


