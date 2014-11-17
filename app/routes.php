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

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/sign-up', function() {
	return View::make('sign-up');
});

Route::get('/sign-in', function() {
	return View::make('sign-in');
});

Route::get('/sign-out', function() {
	return View::make('sign-out');
});

Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');
Route::get('/user/{user_id}', 'UserController@show');
Route::get('/user/{user_id}', 'UserController@edit');
Route::put('/user/{user_id}', 'UserController@udpate');
Route::delete('/user/{user_id}', 'UserController@destroy');

Route::get('/item', 'itemController@index');
Route::get('/item/create', 'ItemController@create');
Route::post('/item', 'ItemController@store');
Route::get('/item/{item_id}', 'ItemController@show');
Route::get('/item/{item_id}', 'ItemController@edit');
Route::put('/item/{item_id}', 'ItemController@udpate');
Route::delete('/item/{item_id}', 'ItemController@destroy');

Route::get('/batch', 'BatchController@index');
Route::get('/batch/create', 'BatchController@create');
Route::post('/batch', 'BatchController@store');
Route::get('/batch/{batch_id}', 'BatchController@show');
Route::get('/batch/{batch_id}', 'BatchController@edit');
Route::put('/batch/{batch_id}', 'BatchController@udpate');
Route::delete('/batch/{batch_id}', 'BatchController@destroy');

Route::get('/load', 'LoadController@index');
Route::get('/load/create', 'LoadController@create');
Route::post('/load', 'LoadController@store');
Route::get('/load/{load_id}', 'LoadController@show');
Route::get('/load/{load_id}', 'LoadController@edit');
Route::put('/load/{load_id}', 'LoadController@udpate');
Route::delete('/load/{load_id}', 'LoadController@destroy');

/*
|--------------------------------------------------------------------------
| Debug Routes
|--------------------------------------------------------------------------
*/

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo print_r($results);

});