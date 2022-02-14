<?php


Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/calc', function () {
    return view('calculation');
});

Route::get('/reg', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
