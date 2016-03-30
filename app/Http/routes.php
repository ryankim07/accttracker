<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', ['as' => 'home', function() {
    return view('layout.master');
}]);

// API ROUTES ==================================
Route::group(array('prefix' => 'api'), function() {
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
    Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');

    Route::resource('applications/{userId}', 'ApplicationsController', ['only' => ['index']]);

    Route::resource('system', 'SystemController', ['only' => ['index']]);

    Route::resource('users', 'UsersController', ['only' => ['index']]);
});

// Catch all undefined routes. Always gotta stay at the bottom since order of routes matters.
Route::any('{undefinedRoute}', function ($undefinedRoute) {
    return view('layout.master');
})->where('undefinedRoute', '([A-z\d-\/_.]+)?');

Blade::setContentTags('<%', '%>');
Blade::setEscapedContentTags('<%%', '%%>');