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

$app->get('/', 'App\Http\Controllers\HomeController@index');

$app->post('/', 'App\Http\Controllers\ImageController@postImage');

$app->get('/{hash}', 'App\Http\Controllers\ImageController@getImage');