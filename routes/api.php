<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tweets', [
    'uses' => 'TweetsController@index',
    'middleware' => ['auth:api']
]);

Route::post('/tweets', [
    'uses' => 'TweetsController@store',
    'middleware' => ['auth:api', 'scope:post-tweets']
]);