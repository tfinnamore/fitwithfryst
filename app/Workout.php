<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //
    protected $fillable = [
      'date', 'user_id','name'
    ];
}
