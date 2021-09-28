<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event__details', function (Blueprint $table) {
            $table->increments('ED_ID');
            $table->unsignedInteger('E_ID');
            $table->foreign('E_ID')->references('E_ID')->on('events');
            $table->time('ED_TIME');
            $table->string('ED_COMMIT',200);
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
        Schema::dropIfExists('event__details');
    }
}
