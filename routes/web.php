<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/developers', 'DeveloperController@index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/tweets', 'TweetsController@index');
    Route::post('/tweets', 'TweetsController@store');

});