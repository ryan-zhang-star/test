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

Route::get('/main/123', 'IndexController@main');
Route::get('/main/{aaa}/bbb/{ccc?}', 'IndexController@main');

//20200103課後練習
Route::get('/base/{Decimal}/{Base}', 'BaseController@main');