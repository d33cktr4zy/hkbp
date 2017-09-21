<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_info', function (Blueprint $table) {
            $table->integer('info_id',false,false)->primary();
            $table->string('info_nama',100);
            $table->string('info_value',100);
            $table->string('info_createby',10);
            $table->date('info_createdt');
            $table->string('info_modifyby',10)->nullable();
            $table->date('info_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_info');
    }
}
