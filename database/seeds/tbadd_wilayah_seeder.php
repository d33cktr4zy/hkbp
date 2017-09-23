<?php

use Illuminate\Database\Seeder;

class tbadd_wilayah_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbadd_wilayah')
            ->insert([
                'wil_id'=> 1,
                'wil_namawilayah'=> 'DP I',
                'wil_kodewilayah'=> 'WIYK I',
                'wil_createby'=> '0001',
                'wil_createdt'=> Carbon\Carbon::now(),
                'wil_modifyby'=> null,
                'wil_modifydt'  => null
            ])
        ;

        DB::table('tbadd_wilayah')
            ->insert([
                'wil_id'=> 2,
                'wil_namawilayah'=> 'DP II',
                'wil_kodewilayah'=> 'WIYK II',
                'wil_createby'=> '0001',
                'wil_createdt'=> Carbon\Carbon::now(),
                'wil_modifyby'=> null,
                'wil_modifydt'  => null
            ])
        ;
        DB::table('tbadd_wilayah')
            ->insert([
                'wil_id'=> 3,
                'wil_namawilayah'=> 'DP III',
                'wil_kodewilayah'=> 'WIYK III',
                'wil_createby'=> '0001',
                'wil_createdt'=> Carbon\Carbon::now(),
                'wil_modifyby'=> null,
                'wil_modifydt'  => null
            ])
        ;

        DB::table('tbadd_wilayah')
            ->insert([
                'wil_id'=> 4,
                'wil_namawilayah'=> 'DP IV',
                'wil_kodewilayah'=> 'WIYK IV',
                'wil_createby'=> '0001',
                'wil_createdt'=> Carbon\Carbon::now(),
                'wil_modifyby'=> null,
                'wil_modifydt'  => null
            ])
        ;

        DB::table('tbadd_wilayah')
            ->insert([
                'wil_id'=> 5,
                'wil_namawilayah'=> 'DP V',
                'wil_kodewilayah'=> 'WIYK V',
                'wil_createby'=> '0001',
                'wil_createdt'=> Carbon\Carbon::now(),
                'wil_modifyby'=> null,
                'wil_modifydt'  => null
            ])
        ;

        DB::table('tbadd_wilayah')
            ->insert([
                'wil_id'=> 6,
                'wil_namawilayah'=> 'DP VI',
                'wil_kodewilayah'=> 'WIYK VI',
                'wil_createby'=> '0001',
                'wil_createdt'=> Carbon\Carbon::now(),
                'wil_modifyby'=> null,
                'wil_modifydt'  => null
            ])
        ;

        DB::table('tbadd_wilayah')
            ->insert([
                'wil_id'=> 7,
                'wil_namawilayah'=> 'DP VII',
                'wil_kodewilayah'=> 'WIYK VII',
                'wil_createby'=> '0001',
                'wil_createdt'=> Carbon\Carbon::now(),
                'wil_modifyby'=> null,
                'wil_modifydt'  => null
            ])
        ;
    }
}
