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

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('mapa_{idtacho}_{basura}','PagesController@realtime')->where(['idtacho' => '[0-9]+'],['basura' => '[0-9]+']);
