<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/shop', function () {
    return view('shop');
});
Auth::routes();

Route::get('/adminhome', function () {
    return view('adminhome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
