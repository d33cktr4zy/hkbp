<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_anak', function (Blueprint $table) {
            $table->string('anak_regid',20)->primary();
            $table->string('anak_idumat',20);
            $table->string('anak_idkk',20);
            $table->smallInteger('anak_anakke')->unsigned();
            $table->string('anak_createby',20);
            $table->date('anak_createdt');
            $table->string('anak_modifyby',20)->nullable();
            $table->date('anak_modifydt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_anak');
    }
}
