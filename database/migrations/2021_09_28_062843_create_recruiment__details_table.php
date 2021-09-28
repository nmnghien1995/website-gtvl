<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruimentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiment__details', function (Blueprint $table) {
            $table->unsignedInteger('RE_ID');
            $table->unsignedInteger('V_ID');
            $table->foreign('RE_ID')->references('RE_ID')->on('recruitments');
            $table->foreign('V_ID')->references('V_ID')->on('vacancies');
            $table->primary(['RE_ID', 'V_ID']);
            $table->string('RD_QUANTITY',10);
            $table->string('RD_SALARY',20);
            $table->string('RD_SKILL',200);
            $table->string('RD_COMMENT',200);
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
        Schema::dropIfExists('recruiment__details');
    }
}
