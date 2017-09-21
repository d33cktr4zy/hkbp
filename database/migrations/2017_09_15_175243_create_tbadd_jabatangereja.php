<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbaddJabatangereja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbadd_jabatangereja', function (Blueprint $table) {
            $table->smallInteger('jabg_id')->unsigned()->primary();
            $table->string('jabg_namajabatan',255);
            $table->string('jabg_singkatan',255);
            $table->string('jabg_keterangan',255)->nullable();
            $table->string('jabg_createby',20);
            $table->date('jabg_createdt');
            $table->string('jabg_modifyby',20)->nullable();
            $table->date('jabg_modifydt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbadd_jabatangereja');
    }
}
