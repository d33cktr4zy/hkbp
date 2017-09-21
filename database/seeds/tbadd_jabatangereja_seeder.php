<?php

use Illuminate\Database\Seeder;

class tbadd_jabatangereja_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbadd_jabatangereja')
            ->insert([
                'jabg_id'           => 1,
                'jabg_namajabatan'  => 'Pendeta',
                'jabg_singkatan'    => 'Pdt.',
                'jabg_keterangan'   => '',
                'jabg_createby'     => '0001',
                'jabg_createdt'     => Carbon\Carbon::now(),
                'jabg_modifyby'     => null,
                'jabg_modifydt'     => null
            ])
        ;

        DB::table('tbadd_jabatangereja')
            ->insert([
                'jabg_id'           => 2,
                'jabg_namajabatan'  => 'Bibelvrouw',
                'jabg_singkatan'    => 'Biv',
                'jabg_keterangan'   => '',
                'jabg_createby'     => '0001',
                'jabg_createdt'     => Carbon\Carbon::now(),
                'jabg_modifyby'     => null,
                'jabg_modifydt'     => null
            ])
        ;

        DB::table('tbadd_jabatangereja')
            ->insert([
                'jabg_id'           => 3,
                'jabg_namajabatan'  => 'Sintua',
                'jabg_singkatan'    => 'St.',
                'jabg_keterangan'   => '',
                'jabg_createby'     => '0001',
                'jabg_createdt'     => Carbon\Carbon::now(),
                'jabg_modifyby'     => null,
                'jabg_modifydt'     => null
            ])
        ;
    }
}
