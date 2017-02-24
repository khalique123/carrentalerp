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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('reg_number', 20)->unique();
            $table->string('vehicle_code', 50)->nullable();
            $table->string('chassis_number', 20)->unique()->nullable();
            $table->string('engine_number', 50)->unique()->nullable();
            $table->string('make', 20)->nullable();
            $table->string('model', 50)->nullable();
            $table->smallInteger('manu_year', false, true)->nullable();
            $table->string('color', 15)->nullable();
            $table->integer('vehicle_class_id')->unsigned();
            $table->integer('weight')->unsigned()->nullable();
            $table->integer('transmission_id')->unsigned();
            $table->longText('description')->nullable();
            $table->integer('fuel_id')->unsigned();
            $table->integer('availability_id')->unsigned();
            $table->string('vehicle_location', 150)->nullable();
            $table->integer('branch_id')->unsigned();
            //$table->integer('vehicle_status_id')->unsigned();
            $table->tinyInteger('passenger_capacity')->unsigned()->nullable();
            $table->tinyInteger('baggage_capacity')->unsigned()->nullable();
            $table->tinyInteger('number_of_doors')->unsigned()->nullable();
            $table->boolean('is_air_conditioned')->nullable();
            $table->integer('display_order');
            $table->string('vin', 100)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('vehicles');
    }
}
