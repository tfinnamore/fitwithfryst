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


}
