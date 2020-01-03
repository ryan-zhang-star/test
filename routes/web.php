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

<<<<<<< HEAD
Route::get('/main/123', 'IndexController@main');
=======
Route::get('/main/{aaa}/bbb/{ccc?}', 'IndexController@main');
>>>>>>> 0932966c12e6eff16d3d0f63bb61d76237730e79
