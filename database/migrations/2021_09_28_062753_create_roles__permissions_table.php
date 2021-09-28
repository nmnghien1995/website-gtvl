<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles__permissions', function (Blueprint $table) {
            $table->unsignedInteger('R_ID');
            $table->unsignedInteger('P_ID');
            $table->foreign('R_ID')->references('R_ID')->on('roles')->onDelete('cascade');;
            $table->foreign('P_ID')->references('P_ID')->on('permissions')->onDelete('cascade');;
            $table->primary(['R_ID', 'P_ID']);
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
        Schema::dropIfExists('roles__permissions');
    }
}
