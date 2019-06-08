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


Route::auth();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}', 'HomeController@show')->name('detail');
Route::delete('/home/{id}', 'HomeController@destroy')->name('delete');
Route::post('/home', 'HomeController@create')->name('create');
Route::get('/home/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('home/update/{id}', 'HomeController@update')->name('update');








//Route::get('users', 'UserController@index');
//Route::get('users', [ 'as' => 'users.index', 'uses' => 'UserController@index']);

//Route::delete('users/{id}', 'UserController@destroy');
//Route::delete('users/{id}', [ 'as' => 'users.index', 'uses' => 'UserController@destroy']);

//
//Route::get('shops', 'UserController@index');
//Route::delete('shops/{id}', 'UserController@destroy');
