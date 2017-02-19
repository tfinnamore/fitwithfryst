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
    return view('index');
});

Auth::routes();

Route::get('logout',function(){
  Auth::logout();
  return redirect('/');
});

Route::get('/home', 'HomeController@index');

//Workout routes
Route::get('/workout', 'WorkoutController@index');
Route::get('/workout/add', 'WorkoutController@add');
Route::get('/workout/{id}', 'WorkoutController@show');
