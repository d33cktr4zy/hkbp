<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbtrNikah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtr_nikah', function (Blueprint $table) {
            $table->string('nik_regno',20)->primary();
            $table->string('nik_idumat',20);
            $table->string('nik_idpasangan',20);
            $table->date('nik_tglnikah');
            $table->string('nik_gereja',255);
            $table->string('nik_pendeta',255);
            $table->string('nik_createby',20);
            $table->date('nik_createdt');
            $table->string('nik_modifyby',20)->nullable();
            $table->date('nik_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtr_nikah');
    }
}
