<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('vehicle_class_id')->references('id')->on('vehicle_classes');
            $table->foreign('transmission_id')->references('id')->on('transmissions');
            $table->foreign('fuel_id')->references('id')->on('fuels');
            $table->foreign('availability_id')->references('id')->on('availabilities');
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('vehicle_status_id')->references('id')->on('vehicle_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign(['vehicle_class_id']);
            $table->dropForeign(['transmission_id']);
            $table->dropForeign(['fuel_id']);
            $table->dropForeign(['availability_id']);
            $table->dropForeign(['branch_id']);
            $table->dropForeign(['vehicle_status_id']);
        });
    }
}
