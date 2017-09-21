<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterIstri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_istri', function (Blueprint $table) {
            $table->string('istri_regid',20)->primary();
            $table->string('istri_idumat',20);
            $table->string('istri_idkk',20);
            $table->smallInteger('istri_urut')->unsigned();
            $table->string('istri_createby',20);
            $table->date('istri_createdt');
            $table->string('istri_modifyby',20)->nullable();
            $table->date('istri_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_istri');
    }
}
