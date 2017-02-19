<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //
    protected $fillable = [
      'date', 'user_id', 'name'
    ];

    public function sets()
    {
      return $this->hasMany('App\Set');
    }
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
