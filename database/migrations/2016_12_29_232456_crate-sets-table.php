<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sets', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->integer('workout_id')->unsigned();
          $table->string('exercise');
          $table->string('reps');
          $table->string('weight');
          $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('workout_id')
              ->references('id')->on('workouts')
              ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
