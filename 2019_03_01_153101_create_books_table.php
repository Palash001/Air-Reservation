<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('from_city');
            $table->string('to_city');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('adult');
            $table->string('children');
            $table->string('class_type');
            $table->string('total_fare');
            $table->integer('user_id');
            $table->integer('profile_id')->unsigned();

            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('flight_users');
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
        Schema::dropIfExists('books');
    }
}
