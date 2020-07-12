<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','AuthController@login');

Route::get('register','AuthController@register');
Route::post('register','AuthController@post');

Route::get('todo','TodoItemController@index');
Route::post('todo','TodoItemController@create');

Route::get('todo/del','TodoItemController@destroy');