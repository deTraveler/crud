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

Route::get('/', function () {
    return view('welcome');
});

// CRUD Route
Route::get('/user', 'UserController@index');
// Create
Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
// Update
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update', 'UserController@update');
// Delete
Route::get('/user/delete/{id}', 'UserController@delete');
