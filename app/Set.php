<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    //
    protected $fillable = [
      'user_id', 'workout_id', 'exercise', 'reps', 'weight'
    ];


    public function workout()
    {
      return $this->belongsTo('App\Workout');
    }


}
