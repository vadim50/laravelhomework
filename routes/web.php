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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['uses'=>'IndexController@index','as'=>'main']);

Route::get('raund/{id?}',['uses'=>'IndexController@index','as'=>'raund']);

Route::get('/list',['uses'=>'IndexController@list','as'=>'list']);

Route::get('work/{i?}',['uses'=>'IndexController@work','as'=>'work']);

