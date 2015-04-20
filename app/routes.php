<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//FRONT END ROUTES

//Set login route
Route::get('login', array('as' => 'login', 'uses' => 'ViewController@login'));
Route::post('login', array('as' => 'login', 'uses' => 'SessionController@store'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));

//Set home route
 Route::get('/', array('as' => 'home', function()
{
    if (!Auth::check()) {
		return Redirect::guest('login');
	}
	else {
		return Redirect::guest('dashboard');
	}
}));

//Group route for authentication
Route::group(array('before' => 'auth'), function()
{
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'ViewController@dashboard'));

	//Route for leaves
	Route::group(array('prefix' => 'leaves'), function()
	{
		Route::get('/', array('as' => 'leaves', 'uses' => 'ViewController@leaves'));
	});

	//Route for time
	Route::group(array('prefix' => 'time'), function()
	{
		Route::get('/', array('as' => 'time', 'uses' => 'ViewController@time'));
	});

	//Route for time
	Route::group(array('prefix' => 'my_information'), function()
	{
		Route::get('/', array('as' => 'my_information', 'uses' => 'ViewController@my_information'));
	});
});

//API ROUTES
Route::group(array('before' => 'auth.token', 'prefix' => 'api/v1'), function () {
	
	/* For users table */
	Route::group(array('prefix' => 'user'), function () {
		Route::get('/', 'UsersController@getAll');
		Route::get('/{id?}', 'UsersController@getSingle');
	});
	/* /For users table */
});
