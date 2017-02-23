<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_locations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('booking_id')->unsigned();
            $table->integer('location_sequence');
            $table->integer('address');
            $table->integer('city_id')->unsigned();
            $table->integer('pin');
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
        Schema::dropIfExists('booking_locations');
    }
}
