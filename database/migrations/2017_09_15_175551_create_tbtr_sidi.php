<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbtrSidi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtr_sidi', function (Blueprint $table) {
            $table->string('sidi_regno',20)->primary();
            $table->string('sidi_idumat',20);
            $table->date('sidi_tglsidi');
            $table->string('sidi_gereja',255);
            $table->string('sidi_pendeta',255);
            $table->string('sidi_createby',20);
            $table->date('sidi_createdt');
            $table->string('sidi_modifyby',20)->nullable();
            $table->date('sidi_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtr_sidi');
    }
}
