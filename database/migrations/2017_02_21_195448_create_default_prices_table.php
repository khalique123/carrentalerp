<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_prices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->morphs('priceable');
            $table->integer('pricing_type');
            $table->float('rate', 10, 2);
            $table->integer('pricing_season_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('default_prices');
    }
}
