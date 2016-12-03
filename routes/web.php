<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'visitors'], function() {
    Route::get('/register', 'RegisterController@register');
    Route::post('/register', 'RegisterController@postRegister');

    Route::get('/login', 'LoginController@login');
    Route::post('/login', 'LoginController@postLogin');
});

Route::post('/logout', 'LoginController@postLogout');

Route::get('/users', 'AdminController@users')->middleware('admin');

Route::get('/approve', 'ManagerController@approve')->middleware('manager');