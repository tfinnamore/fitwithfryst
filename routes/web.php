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
Route::group(['middleware' => 'auth'], function(){

  Route::get('/workout', 'WorkoutController@index')->name('allWorkouts');
  Route::get('/workout/add', 'WorkoutController@add')->name('addWorkout');
  Route::post('/workout/create', 'WorkoutController@create')->name('createWorkout');
  Route::post('/workout/{workout}/addSet', 'SetController@add')->name('addSet');
  Route::post('/workout/{workout}/delSet/{set}', 'SetController@destroy')->name('delSet');
  Route::get('/workout/{workout}', 'WorkoutController@show')->name('showWorkout');

});
