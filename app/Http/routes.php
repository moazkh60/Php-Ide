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

//Route::get('/', 'WelcomeController@index');


Route::get('home', function () {
        return Redirect::to('/auth/logout');
		});
Route::get('user', 'UserController@index');
Route::get('moderator', 'ModeratorController@index');

Route::post('output','CodeController@store');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
        return Redirect::to('/auth/login'); 
});

Route::get('/select', function () {
    if (Auth::guest())
    {
        return Redirect::to('/auth/login');
    }
    else if(Auth::user()->role == 'Moderator')
    {
        return Redirect::to('/moderator');
    }
    else
        return Redirect::to('/user');
        
});


