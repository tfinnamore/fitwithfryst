<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WorkoutController extends Controller
{
    //


  public function add(){

    return view('workouts.add');

  }

  public function create(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'date' => 'required|date_format:"m/d/Y"'
    ]);

    $workout = new \App\Workout;
    $workout->name = $request->name;
    $workout->date = $request->date;
    $workout->user_id = $request->user()->id;
    $workout->save();

    return redirect()->route('showWorkout', ['workout' => $workout->id]);


  }

  public function show(\App\Workout $workout){
    echo $workout->name;
    echo "<br />";
    echo $workout->date;
  }


}
