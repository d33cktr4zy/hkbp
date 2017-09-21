<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterUmat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_umat', function (Blueprint $table) {
            $table->string('umat_regid',20);
            $table->string('umat_namadepan',50);
            $table->string('umat_namabelakang',50);
            $table->string('umat_namatengah',50)->nullable();
            $table->string('umat_alamat',255);
            $table->string('umat_nomorhp',20);
            $table->string('umat_tplahir',50);
            $table->date('umat_tglahir');
            $table->char('umat_goldarah',2)->nullable();
            $table->char('umat_jk',1);
            $table->boolean('umat_baptis')->nullable();
            $table->boolean('umat_sidi')->nullable();
            $table->boolean('umat_menikah')->nullable();
            $table->date('umat_tglmasuk');
            $table->boolean('umat_pindah')->nullable();
            $table->boolean('umat_meninggal')->nullable();
            $table->string('umat_pendidikan',20)->nullable();
            $table->string('umat_tempatkerja',50)->nullable();
            $table->string('umat_jabatankerja',50)->nullable();
            $table->smallInteger('umat_wilayah')->unsigned();
            $table->smallInteger('umat_statusjemaat')->unsigned();
            $table->smallInteger('umat_jabatangereja')->nullable()->unsigned();
            $table->smallInteger('umat_jabatanorgangereja')->nullable()->unsigned();
            $table->string('umat_kk',20);
            $table->boolean('umat_iskk');
            $table->string('umat_namaayah',50);
            $table->string('umat_namaibu',50);
            $table->string('umat_createby',10);
            $table->date('umat_createdt');
            $table->string('umat_modifyby',10)->nullable();
            $table->date('umat_modifydt')->nullable();

            //$table->unique(['umat_namadepan','umat_namabelakang','umat_namatengah']);
            $table->primary('umat_regid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_umat');
    }
}
