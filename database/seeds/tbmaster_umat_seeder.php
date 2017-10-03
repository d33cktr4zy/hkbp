<?php

use Illuminate\Database\Seeder;

class tbmaster_umat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1; $i < 1000; $i++) {
            DB::table('tbmaster_umat')->insert([
                'umat_regid'                => $faker->unique()->numerify("####"),
                'umat_namadepan'            => $faker->firstName(),
                'umat_namabelakang'         => $faker->lastName(),
                'umat_namatengah'           => $faker->optional()->firstName(),
                'umat_alamat'               => 'Jl. Menteng ' . $faker->numberBetween(1,7) . ' No. ' . $faker->randomDigitNotNull(),
                'umat_nomorhp'              => '08' + $faker->randomElement($array = ['12','56','17','31','21','22']) + $faker->numerify('#######'),
                'umat_tplahir'              => $faker->randomElement($array = ['Medan', 'Tapanuli', 'Binjai','Sipirok',]),
                'umat_tglahir'              => $faker->dateTimeBetween($startDate= '-60 years', $endDate = '-10 years'),
                'umat_goldarah'             => $faker->randomElement($array = ['A', 'B', 'O', 'AB']),
                'umat_jk'                   => $faker->randomElement($array = ['L', 'P']),
                'umat_baptis'               => $faker->randomElement($array = [ 1, 0]),
                'umat_sidi'                 => $faker->randomElement($array = [ 1, 0]),
                'umat_menikah'              => $faker->randomElement($array = [ 1, 0]),
                'umat_tglmasuk'             => $faker->date($format = 'Y-m-d', $max = '-2 years'),
                'umat_pindah'               => $faker->randomElement($array = [ 1, 0]),
                'umat_meninggal'            => $faker->randomElement($array = [ 1, 0]),
                'umat_pendidikan'           => $faker->randomElement($array = ['SD','SMP','SMA', 'D3','S1','S2','S3','Tidak Sekolah']),
                'umat_tempatkerja'          => null,
                'umat_jabatankerja'         => $faker->randomElement($array = ['Pegawai', 'PNS', 'Superviser', 'Manager', 'Direktur']),
                'umat_wilayah'              => $faker->numberBetween($min = 1, $max = 7),
                'umat_statusjemaat'         => $faker->numberBetween($min = 1, $max = 3),
                'umat_jabatangereja'        => $faker->numberBetween($min = 1, $max = 3),
                'umat_jabatanorgangereja'   => $faker->numberBetween($min = 1, $max = 5),
                'umat_kk'                   => $faker->numerify('####'),
                'umat_iskk'                 => $faker->randomElement($array = [1,0]),
                'umat_namaayah'             => null,
                'umat_namaibu'              => null,
                'umat_createby'             => '0001',
                'umat_createdt'             => Carbon\Carbon::now(),
                'umat_modifyby'             => null,
                'umat_modifydt'             => null
            ]);
        }
    }
}
