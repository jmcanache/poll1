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

Route::get('/', 'Poll1Controller@index');
Route::get('getNextPageInfo/{next_position}', ['as' => 'getNextPageInfo', 'uses' => 'Poll1Controller@getNextPageInfo']);
Route::post('send_mail', ['as' => 'send_mail', 'uses' =>'Poll1Controller@send_mail']);
