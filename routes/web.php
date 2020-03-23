<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
