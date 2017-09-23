<?php

use Illuminate\Database\Seeder;

class tbadd_jabatanorgangereja_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbadd_jabatanorgangereja')
            ->insert([
                'jabog_id'              =>1,
                'jabog_namajabatan'     => 'Koinonia',
                'jabog_keterangan'      => 'Pejabat Koinonia',
                'jabog_createby'        => '0001',
                'jabog_createdt'        => Carbon\Carbon::now(),
                'jabog_modifyby'        => null,
                'jabog_modifydt'        => null
            ])
        ;

        DB::table('tbadd_jabatanorgangereja')
            ->insert([
                'jabog_id'              => 2,
                'jabog_namajabatan'     => 'Diakon',
                'jabog_keterangan'      => 'Pejabat Koinonia',
                'jabog_createby'        => '0001',
                'jabog_createdt'        => Carbon\Carbon::now(),
                'jabog_modifyby'        => null,
                'jabog_modifydt'        => null
            ])
        ;
    }
}
