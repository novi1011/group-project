<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('produk', 'ProdukController');
Route::delete('myproductsDeleteAll', 'produkController@deleteAll');

Route::resource('customer', 'CustomerController');


