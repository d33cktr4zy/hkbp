<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_keluarga', function (Blueprint $table) {
            $table->string('kk_regno',20);
            $table->string('kk_idumat',20);
            $table->boolean('kk_pindah')->nullable();
            $table->string('kk_createby',20);
            $table->date('kk_createdt');
            $table->string('kk_modifyby',20)->nullable();
            $table->date('kk_modifydt')->nullable();

            $table->primary('kk_regno');
            $table->unique('kk_idumat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_keluarga');
    }
}
