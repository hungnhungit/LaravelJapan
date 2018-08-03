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

Route::Auth();

Route::group(['as' => '','prefix'=>'admin'],function (){
    Route::get('/login', ['uses' => 'Auth\LoginController@showLoginForm','as' => 'login']);
    Route::get('/login', ['uses' => 'Auth\LoginController@showLoginForm','as' => 'login']);

    Route::group(['middleware'=>'admin.user'],function(){
        Route::get('/dashboard', ['uses' =>'LaraJapanController@index','as' => 'dashboard']);
    });
});

Route::get('test',function (){

    setting('admin.bg_image');

});