<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('impound_id');
            $table->string('make');
            $table->string('licence_plate');
            $table->string('offender_id');
            $table->string('dln');
            $table->string('vehicle_type');
            $table->string('citation_number');
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
        Schema::drop('impounds');
    }
}
