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



Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'ShopController@index')->name('home');



Route::get('/test',function () {
    return view('test');
});

Route::post('/test-form', 'HomeController@write1')->name('postTest');




Route::get('/home/{id}', 'ShopController@show')->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
