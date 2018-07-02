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

// Pages
Route::get('/', ['uses' => 'Controller_Pag@getWelcome']);
Route::get('welcome', ['uses' => 'Controller_Pag@getWelcome']);
Route::get('home', ['uses' => 'Controller_Pag@getIndex']);
Route::get('about', ['uses' => 'Controller_Pag@getAbout']);
Route::get('success', ['uses' => 'Controller_Pag@getSuccess']);

// Resources
Route::resource('news', 'Controller_News');

// Middleware
Route::group(['middleware' => ['web']], function() {
    Route::get('/', ['uses' => 'Controller_Pag@getWelcome']);
    Route::get('welcome', ['uses' => 'Controller_Pag@getWelcome']);
    Route::get('home', ['uses' => 'Controller_Pag@getIndex']);
    Route::get('about', ['uses' => 'Controller_Pag@getAbout']);
    Route::get('success', ['uses' => 'Controller_Pag@getSuccess']);
    Route::resource('news', 'Controller_News');
});
