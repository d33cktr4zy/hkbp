<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbtrMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtr_masuk', function (Blueprint $table) {
            $table->string('msk_regno',20)->primary();
            $table->string('msk_idumat',20);
            $table->date('msk_tgl');
            $table->string('msk_gereja');
            $table->string('msk_createby',20);
            $table->date('msk_createdt');
            $table->string('msk_modifyby',20)->nullable();
            $table->date('msk_modifydt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtr_masuk');
    }
}
