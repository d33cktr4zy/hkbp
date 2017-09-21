<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterPejabatgereja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_pejabatgereja', function (Blueprint $table) {
            $table->string('pg_noreg',20)->primary();
            $table->string('pg_idumat',20);
            $table->string('pg_jabogid',20);
            $table->date('pg_tglmulai');
            $table->date('pg_tglakhir');
            $table->string('pg_masajabatan');
            $table->string('pg_createby',20);
            $table->date('pg_createdt');
            $table->string('pg_modifyby',20)->nullable();
            $table->date('pg_modifydt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_pejabatgereja');
    }
}
