<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100);
			$table->string('last_name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 150);
			$table->integer('status');
			$table->string('address', 190)->nullable();
            $table->integer('city_id');
            $table->string('phone_number', 20)->nullable();
            $table->integer('pin');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
