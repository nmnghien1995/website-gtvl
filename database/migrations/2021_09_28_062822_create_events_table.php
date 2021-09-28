<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('events', function (Blueprint $table) {
            $table->increments('E_ID');
            $table->unsignedBigInteger('USER_ID');
            $table->unsignedInteger('ET_ID');
            $table->foreign('USER_ID')->references('id')->on('users');
            $table->foreign('ET_ID')->references('ET_ID')->on('event__types');
            $table->string('E_NAME',128);
            $table->date('E_DATE');
            $table->string('E_START',6);
            $table->string('E_END',6);
            $table->string('E_IMAGE');
            $table->string('IN_ADDRESS',200);
            $table->unsignedInteger('E_VIEW');
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
        Schema::dropIfExists('events');
    }
}
