<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRobberiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('robberies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('robbery_id');
            $table->string('crime_id');
            $table->string('evidence_id');
            $table->string('offender_id');
            $table->string('user_id');
            $table->string('victims_name');
            $table->string('crime_location');
            $table->string('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('robberies');
    }
}
