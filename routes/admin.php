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
Route::get('report', 'AdminAuth\ReportController@index');
Route::get('report_today', 'AdminAuth\ReportController@report_today');
Route::get('report_weekly', 'AdminAuth\ReportController@report_weekly');
Route::get('report_monthly', 'AdminAuth\ReportController@report_monthly');
Route::get('report_yearly', 'AdminAuth\ReportController@report_yearly');
Route::get('report_merchant/{id}', 'AdminAuth\ReportController@report_merchant_earning');
Route::get('generateNota/{id}', 'AdminAuth\ReportController@generateNota');
Route::post('showImage/{id}', 'AdminAuth\ProductController@showImage')->name('showImage');
Route::get('profit_today', 'AdminAuth\ReportController@profit_today');
Route::get('profit_weekly', 'AdminAuth\ReportController@profit_weekly');
Route::get('profit_monthly', 'AdminAuth\ReportController@profit_monthly');
Route::get('profit_yearly', 'AdminAuth\ReportController@profit_yearly');


