<?php

Route::get('/home', 'CustomerAuth\CartController@history')->name('home');

Route::resource('cart', 'CustomerAuth\CartController');
Route::delete('emptyCart', 'CustomerAuth\CartController@emptyCart');
Route::post('pay', 'CustomerAuth\CartController@pay');
Route::get('payment/{id}', 'CustomerAuth\CartController@payment')->name('payment');


