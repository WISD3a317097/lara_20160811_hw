<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('/about',['as'=>'about.index','uses'=>'AboutsController@index']);
Route::get('/news',['as'=>'news.index','uses'=>'NewsController@index']);