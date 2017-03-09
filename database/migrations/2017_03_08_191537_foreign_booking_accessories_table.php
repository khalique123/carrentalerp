<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignBookingAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_accessories', function (Blueprint $table) {
            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->foreign('accessory_id')->references('id')->on('accessories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_accessories', function (Blueprint $table) {
            $table->dropForeign(['booking_id']);
            $table->dropForeign(['accessory_id']);
        });
    }
}
