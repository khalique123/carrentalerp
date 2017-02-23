<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name')->nullable();
            $table->string('address', 190);
            $table->string('fathers_name', 190)->nullable();
            $table->integer('category_id')->unsigned();
            $table->date('date_of_birth')->nullable();
            $table->date('valid_upto')->nullable();
            $table->string('badge_number', 150)->nullable();
            $table->string('ref_number', 150);
            $table->date('date_of_issue')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
