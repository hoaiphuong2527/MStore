<?php

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'WebController@index');
    Route::get('/category/{id}', 'WebController@category');
    Route::get('/product/{id}', 'WebController@product');
    Route::get('/{page}', 'WebController@page');
    Route::get('/register', 'RegisterController@index');
    Route::post('/register', 'RegisterController@register');
    Route::get('/activate/{userid}/{token}/{code}', 'RegisterController@activate');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', function() {
        return view('backend.login');
    });
    
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'BackendProductController@index');
        Route::get('/edit/{id}', 'BackendProductController@edit');
        Route::post('/edit/{id}', 'BackendProductController@update');
        Route::get('/delete/{id}', 'BackendProductController@destroy');
        Route::get('/new', 'BackendProductController@create');
        Route::get('/new', 'BackendProductController@store');
    });
});