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
    return view('web/home');
});

Auth::routes();



Route::group(['namespace' => 'Api', 'prefix' => 'api', 'middleware' => 'auth'], function () {
    Route::get('gerenciar/site', 'SiteController@index')->name('manager');
    Route::get('/', 'HomeController@index')->name('api.home');
});

