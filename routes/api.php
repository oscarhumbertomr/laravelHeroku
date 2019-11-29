<?php

use Illuminate\Http\Request;


Route::get('/test', function (Request $request) {
    return 'testing Heroku';
})->middleware('auth');


Route::post('auth/register', 'AuthController@register')->middleware('auth');
Route::post('auth/login', 'AuthController@login');
Route::post('auth/logout', 'AuthController@logout');
Route::get('auth/user', 'AuthController@user')->middleware('auth');

/*Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});*/