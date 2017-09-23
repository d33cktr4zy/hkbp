<?php

use Illuminate\Database\Seeder;

class tbadd_statusjemaat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tbadd_statusjemaat')
            ->insert([
                'status_id'         => 1,
                'status_nama'       => 'Aktif',
                'status_createby'   => '0001',
                'status_createdt'   => Carbon\Carbon::now(),
                'status_modifyby'   => null,
                'status_modifydt'   => null
            ])
        ;

        DB::table('tbadd_statusjemaat')
            ->insert([
                'status_id'         => 2,
                'status_nama'       => 'Kena RPP',
                'status_createby'   => '0001',
                'status_createdt'   => Carbon\Carbon::now(),
                'status_modifyby'   => null,
                'status_modifydt'   => null
            ])
        ;

        DB::table('tbadd_statusjemaat')
            ->insert([
                'status_id'         => 3,
                'status_nama'       => 'Pending',
                'status_createby'   => '0001',
                'status_createdt'   => Carbon\Carbon::now(),
                'status_modifyby'   => null,
                'status_modifydt'   => null
            ])
        ;
    }
}
