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

Route::get('/applications','ApplicationController@create');
Route::post('/applications','ApplicationController@store')->name('application.store');

Route::get('/documents','DocumentController@create');
Route::post('/documents','DocumentController@store')->name('document.store');