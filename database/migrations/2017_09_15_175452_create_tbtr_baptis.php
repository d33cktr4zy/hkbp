<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbtrBaptis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtr_baptis', function (Blueprint $table) {
            $table->string('bap_regno',20)->primary();
            $table->string('bap_idumat',20);
            $table->date('bap_tglbaptis');
            $table->string('bap_gereja',255);
            $table->string('bap_pendeta',255);
            $table->string('bap_createby',20);
            $table->date('bap_createdt');
            $table->string('bap_modifyby',20)->nullable();
            $table->date('bap_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtr_baptis');
    }
}
