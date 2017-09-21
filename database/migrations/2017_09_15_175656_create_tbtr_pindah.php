<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbtrPindah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtr_pindah', function (Blueprint $table) {
            $table->string('pin_regno',20)->primary();
            $table->string('pin_idumat',20);
            $table->string('pin_idkk',20);
            $table->char('pin_jenispindah',1);
            $table->date('pin_tanggalpindah');
            $table->string('pin_gerejatujuan',255);
            $table->string('pin_createby',20);
            $table->date('pin_createdt');
            $table->string('pin_modifyby',20)->nullable();
            $table->date('pin_modifydt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtr_pindah');
    }
}
