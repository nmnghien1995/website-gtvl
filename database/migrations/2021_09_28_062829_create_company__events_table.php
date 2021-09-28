<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company__events', function (Blueprint $table) {
            $table->unsignedInteger('E_ID');
            $table->unsignedInteger('C_ID');
            $table->foreign('E_ID')->references('E_ID')->on('events');
            $table->foreign('C_ID')->references('C_ID')->on('companies');
            $table->primary(['E_ID', 'C_ID']);
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
        Schema::dropIfExists('company__events');
    }
}
