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

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => '2'], function() {
    
    Route::get('1',['as'=>'2.1','uses'=>'TwoController@one']);
    Route::get('2',['as'=>'2.2','uses'=>'TwoController@two']);
    
});
