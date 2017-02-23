<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignDeaultPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('default_prices', function (Blueprint $table) {
            $table->foreign('pricing_type')->references('id')->on('pricing_types');
            $table->foreign('pricing_season_id')->references('id')->on('seasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('default_prices', function (Blueprint $table) {
            $table->dropForeign(['pricing_type']);
            $table->dropForeign(['pricing_season_id']);
        });
    }
}
