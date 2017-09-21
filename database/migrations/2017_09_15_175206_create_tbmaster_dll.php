<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterDll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_dll', function (Blueprint $table) {
            $table->string('dll_regno',20)->primary();
            $table->string('dll_idkk',20);
            $table->string('dll_idumat',20);
            $table->integer('dll_nourut');
            $table->string('dll_keterangan',255)->nullable();
            $table->string('dll_createby',20);
            $table->date('dll_createdt');
            $table->string('dll_modifyby',20)->nullable();
            $table->date('dll_modifydt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_dll');
    }
}
