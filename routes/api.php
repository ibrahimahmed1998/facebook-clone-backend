<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router)
{
    Route::Post('updateBox', 'AuthController@updateBox');
    Route::Post('logout', 'AuthController@logout');
    Route::Post('resetPassword', 'AuthController@resetPassword');
    Route::Post('signin', 'AuthController@signin');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('changePasswrod', 'AuthController@changePasswrod');
});

