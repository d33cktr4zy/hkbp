<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbtr_pelanggaran', function (Blueprint $table) {
            $table->string('pl_regno',20);
            $table->string('pl_idumat',20);
            $table->date('pl_tgmulai');
            $table->date('pl_tgakhir');
            $table->string('pl_sebab',255);
            $table->integer('pl_count')->unsigned();
            $table->string('pl_createby',20);
            $table->date('pl_createdt');
            $table->string('pl_modifyby',20)->nullable();
            $table->date('pl_modifydt')->nullable();

            $table->primary('pl_regno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbtr_pelanggaran');
    }
}
