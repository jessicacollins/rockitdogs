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
	return view('homePage');
});
//Route::get('/','WelcomeController@index');

Route::get('home','HomeController@index');
// Route::get('profile','UserController@profile');

Route::get('/profile', 'UserController@showProfile');

Route::get('hometest', function () {
	return view('home_page');
});

Route::get('adddog', function () {
	return view('addDog');
});

Route::get('dogprofile', function () {
	return view('dogProfile');
});

Route::get('editdogprofile', function () {
	return view('editDogProfile');
});


Route::get('dogimage', function () {
	return view('dogImage');
});

Route::get('community', function () {
	return view('community');
});

Route::get('userprofile', function () {
	return view('userProfile');
});

Route::get('edituser', function () {
	return view('editUser');
});

Route::get('vet', function () {
	return view('vet');
});

Route::get('/login', function () {
	return view('/auth/Login');
});

Route::get('register', function () {
	return view('/auth/register');
});

Route::get('about', function () {
	return view('aboutUs');
});

Route::get('contact', function () {
	return view('contact');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('test', 'TestController@testDB');