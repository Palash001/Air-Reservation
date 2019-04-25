<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_searches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fNo');
            $table->string('from_city');
            $table->string('to_city');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('adult');
            $table->string('child');
            $table->string('e_fare');
            $table->string('b_fare');
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
        Schema::dropIfExists('flight_searches');
    }
}
