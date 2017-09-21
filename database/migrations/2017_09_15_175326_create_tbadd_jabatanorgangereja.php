<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbaddJabatanorgangereja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbadd_jabatanorgangereja', function (Blueprint $table) {
            $table->smallInteger('jabog_id')->primary();
            $table->string('jabog_namajabatan',250);
            $table->string('jabog_keterangan',250);
            $table->string('jabog_createby',20);
            $table->date('jabog_createdt');
            $table->string('jabog_modifyby',20)->nullable();
            $table->date('jabog_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbadd_jabatanorgangereja');
    }
}
