<?php

Blade::setContentTags('<%', '%>');    // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data

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

//Route::get('/home', 'HomeController@index');

Route::get('/', 'WelcomeController@index');
Route::get('/entra', 'WelcomeController@entra');


Route::post('/registrate', 'WelcomeController@postCity');
Route::get('/registrate', 'WelcomeController@register');


Route::group(['prefix' => '/tienda'], function()
{

	Route::get('/', 'ShopController@index');
	


});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('home', function()

{

	return redirect('/');
});

