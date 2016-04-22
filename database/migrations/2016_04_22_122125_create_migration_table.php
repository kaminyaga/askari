<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('dob');
            $table->string('national_id');
            $table->string('phone_number');
            $table->string('guardians');
            $table->string('reporting_date');
            $table->string('evidence_id');
            $table->string('date_last_seen');
            $table->string('place_last_seen');
            $table->string('suspects');
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
        Schema::drop('missing_persons');
    }
}
