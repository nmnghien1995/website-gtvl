<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacters', function (Blueprint $table) {
            $table->increments('CT_ID');
            $table->unsignedInteger('C_ID');
            $table->foreign('C_ID')->references('C_ID')->on('companies');
            $table->string('CT_NAME',64);
            $table->string('CT_PHONE',10);
            $table->string('CT_EMAIL',50);
            $table->string('CT_POSITION',64);
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
        Schema::dropIfExists('contacters');
    }
}
