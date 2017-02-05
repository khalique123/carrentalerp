<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('model_id');
			$table->string('registration_number')->unique();
			$table->string('regsitered_owner');
			$table->string('address');
			$table->integer('makers_class');
			$table->date('manufacture_date');
			$table->string('fuel_id');
			$table->string('engine_number');
			$table->string('chassis_number');
			$table->integer('seating_capacity');
			$table->string('color');
			$table->string('registration_date');
			$table->string('registration_expiry_date');
			$table->integer('kilometers_run');
			$table->integer('fuel_efficiency');
			$table->integer('interior_rating');
			$table->integer('engine_rating');
			$table->integer('tyres_rating');
			$table->timestamps();
			
			$table->foreign('makers_class')->references('id')->on('models');
			$table->foreign('fuel_id')->references('id')->on('fuels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
