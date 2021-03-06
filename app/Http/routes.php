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

Route::get('/','Index@index');

Route::get('auth/login', 'Authentication@login');
Route::post('auth/login', 'Authentication@authenticate');
Route::get('auth/logout', 'Authentication@logout');

// Registration routes...
Route::post('/register', 'Auth@register');