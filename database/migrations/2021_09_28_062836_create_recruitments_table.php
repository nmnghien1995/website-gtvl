<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->increments('RE_ID');
            $table->unsignedBigInteger('USER_ID');
            $table->unsignedInteger('C_ID');
            $table->foreign('USER_ID')->references('id')->on('users');
            $table->foreign('C_ID')->references('C_ID')->on('companies');
            $table->string('RE_NAME',200);
            $table->string('E_DATE');
            $table->string('RE_FILE');
            $table->unsignedInteger('RE_VIEW');
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
        Schema::dropIfExists('recruitments');
    }
}
