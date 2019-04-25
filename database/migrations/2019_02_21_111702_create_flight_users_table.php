<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_users', function (Blueprint $table) {
            $table->increments('id');
             $table->string('phone');
             $table->string('passport_no');
             $table->string('visa_no');
             $table->string('address');
             $table->string('dob');
             $table->string('gender');
             $table->integer('user_id')->unsigned();
             $table->timestamps();
             $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_users');
    }
}
