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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function () {

  // Route::get('/home', 'HomeController@index')->name('home');

  Route::resource('comments', 'CommentsController');

  Route::resource('users', 'UsersController');

  Route::get('/api', 'ApiController@index')->name('api');;

  Route::resource('products', 'ProductsController');

});
