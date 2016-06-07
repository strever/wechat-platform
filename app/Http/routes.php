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

/**
 * m.wechat.sayhey.cn
 */
Route::group(['domain' => env('APP_DOMAIN_M'), 'namespace' => 'Mobile'], function() {
    Route::get('register', 'CreditCard\Register@index');
});
