<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('IN_ID');
            $table->unsignedInteger('FA_ID');
            $table->unsignedBigInteger('USER_ID');
            $table->foreign('USER_ID')->references('id')->on('users');
            $table->foreign('FA_ID')->references('FA_ID')->on('faculties');
            $table->string('IN_NAME',64);
            $table->string('IN_PHONE',10);
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
        Schema::dropIfExists('information');
    }
}
