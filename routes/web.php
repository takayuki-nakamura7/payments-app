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
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/about', function () {
    return view('about');
})->name('about');


Route::auth();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/filter', 'HomeController@filter')->name('filter');
Route::get('/home/{id}', 'HomeController@show')->name('detail');
Route::delete('/home/{id}', 'HomeController@destroy')->name('delete');
Route::post('/home', 'HomeController@create')->name('create');
Route::get('/home/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('/home/update/{id}', 'HomeController@update')->name('update');


Route::get('shops', 'ShopController@index')->name('shops');
Route::delete('shops/{id}', 'ShopController@destroy')->name('shops_destroy');
Route::post('shops', 'ShopController@create')->name('shops_create');
Route::get('/shops/edit/{id}', 'ShopController@edit')->name('shops_edit');
Route::get('/shops/filter', 'ShopController@filter')->name('shops_filter');
Route::post('/shops/update/{id}', 'ShopController@update')->name('shops_update');


Route::get('users', 'UserController@index')->name('users');
Route::get('users/filter', 'UserController@filter')->name('users_filter');
Route::get('users/paymentsList/{id}/{name}', 'UserController@show')->name('users_paymentsList');



