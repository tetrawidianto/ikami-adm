<?php

use Illuminate\Database\Seeder;

class AspekTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aspek')->delete();
        
        \DB::table('aspek')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Pengamanan Keterlibatan Pihak Ketiga Penyedia Layanan',
                'deskripsi' => NULL,
                'area_id' => 7,
                'created_at' => '2020-05-26 03:24:01',
                'updated_at' => '2020-05-26 03:24:01',
            ),
            1 => 
            array (
                'id' => 2,
            'nama' => 'Pengamanan Layanan Infrastruktur Awan (Cloud Services)',
                'deskripsi' => NULL,
                'area_id' => 7,
                'created_at' => '2020-05-26 03:24:53',
                'updated_at' => '2020-05-26 03:24:53',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Perlindungan Data Pribadi',
                'deskripsi' => NULL,
                'area_id' => 7,
                'created_at' => '2020-05-26 03:26:04',
                'updated_at' => '2020-05-26 03:26:04',
            ),
        ));
        
        
    }
}