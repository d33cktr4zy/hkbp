<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbtrMeninggal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtr_meninggal', function (Blueprint $table) {
            $table->string('md_regno',20)->primary();
            $table->string('md_idumat',20);
            $table->date('md_tanggal');
            $table->string('md_tempat',255);
            $table->string('md_makam',255);
            $table->string('md_idkk',20);
            $table->string('md_createby',20);
            $table->date('md_createdt');
            $table->string('md_modifyby',20)->nullable();
            $table->date('md_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtr_meninggal');
    }
}
