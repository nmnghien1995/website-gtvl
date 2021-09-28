<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uers__roles', function (Blueprint $table) {
            $table->foreign('R_ID')->references('R_ID')->on('roles')->onDelete('cascade');;
            $table->foreign('USER_ID')->references('id')->on('users')->onDelete('cascade');;
            $table->unsignedInteger('R_ID');
            $table->unsignedBigInteger('USER_ID');
            $table->primary(['R_ID', 'USER_ID']);
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
        Schema::dropIfExists('uers__roles');
    }
}
