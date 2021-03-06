<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//must be auth to open /itemCRUD
Route::group(['middleware'=> 'auth'], function(){
  Route::resource('itemCRUD', 'ItemCRUDController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/got', [
  'middleware'=> ['auth'],
  'uses'=> function(){
    echo "You are allowed to view this page!";
  }
]);
