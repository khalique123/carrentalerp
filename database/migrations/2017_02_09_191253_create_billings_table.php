<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle_id');
            $table->string('customer_id');
            $table->integer('people_travelling');
            $table->date('travel_date');
            $table->date('expected_return_date');
            $table->date('actual_return_date');
            $table->date('pick_up_time');
            $table->string('pick_up_location');
            $table->double('advance_payment_amount', 8, 2);
            $table->integer('from_city_id');
            $table->double('total_estimated_amount');
            $table->double('total_actual_amount');
            
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
        Schema::dropIfExists('billings');
    }
}
