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

Route::get('/', function() {
	return view('layout');
});
//Route::get('/','WelcomeController@index');

Route::get('home','HomeController@index');

Route::get('hometest', function () {
	return view('home_page');
});

Route::get('dogprofile', function () {
	return view('dogprofile');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('test', 'TestController@testDB');