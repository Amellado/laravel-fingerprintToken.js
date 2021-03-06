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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','EstableExampleController@index');
Route::post('login','EstableExampleController@saveOrTest');

Route::get('viewChange','DiverseExampleController@index');
Route::post('viewChange/setUp','DiverseExampleController@setUp');
Route::post('viewChange/2','DiverseExampleController@secondView');
Route::post('viewChange/3','DiverseExampleController@thirdView');


