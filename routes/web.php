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

Route::get('/', 'StaicPagesController@home')->name('home');
Route::get('/help', 'StaicPagesController@help')->name('help');
Route::get('/about', 'StaicPagesController@about')->name('about');

Route::get('signup','UsersController@create')->name('signup');
