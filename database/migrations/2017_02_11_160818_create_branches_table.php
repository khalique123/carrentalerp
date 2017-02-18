<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('display_order');
            $table->string('name', 190)->unique();
            $table->longText('address')->nullable();
            $table->integer('city_id');
            $table->string('phone_number', 50)->nullable();
            $table->string('email', 190)->nullable();
            $table->string('business_hours', 190)->nullable();
            $table->boolean('is_active');
            $table->longText('landmark')->nullable();
            $table->float('latitude', 10, 7)->nullable();
            $table->float('longitude', 10, 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
