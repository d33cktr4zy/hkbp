<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbaddStatusjemaat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbadd_statusjemaat', function (Blueprint $table) {
            $table->smallInteger('status_id')->primary();
            $table->string('status_nama');
            $table->string('status_createby',20);
            $table->date('status_createdt');
            $table->string('status_modifyby',20)->nullable();
            $table->date('status_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbadd_statusjemaat');
    }
}
