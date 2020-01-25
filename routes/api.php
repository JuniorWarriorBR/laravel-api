<?php

use Illuminate\Http\Request;

Route::get('/online', function () {
    return response()->json(['API' => 'Online.'], 200);
});

Route::post('login', 'API\UserController@login');

Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});