<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', 'IndexController@main');

Route::get('/{number}/{format_type?}', 'IndexController@ryanFormat')
->where(['number' => '[0-9]+', 'format_type' => '[0-9]+']);
