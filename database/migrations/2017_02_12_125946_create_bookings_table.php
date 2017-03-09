<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 10);
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('company_name')->nullable();
            $table->integer('vehicle_id')->unsigned();
            $table->string('address');
            $table->integer('city_id')->unsigned();
            $table->integer('pin');
            $table->string('phone', 20);
            $table->string('landline', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->timestamp('pick_up_time');
            $table->timestamp('drop_time')->nullable();
            $table->date('booking_start_date');
            $table->date('booking_end_date');
            $table->string('passport_id', 50)->nullable();
            $table->integer('customer_group_id')->unsigned();
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
        Schema::dropIfExists('bookings');
    }
}
