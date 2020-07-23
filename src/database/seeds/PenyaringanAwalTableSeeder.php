<?php

use Illuminate\Database\Seeder;

class PenyaringanAwalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penyaringan_awal')->delete();
        
        \DB::table('penyaringan_awal')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kesiapan_id' => 1,
                'pilihan_id' => 11,
                'jawaban_id' => 32,
                'created_at' => '2020-06-04 10:46:08',
                'updated_at' => '2020-06-04 10:46:08',
            ),
            1 => 
            array (
                'id' => 2,
                'kesiapan_id' => 2,
                'pilihan_id' => 11,
                'jawaban_id' => 32,
                'created_at' => '2020-06-04 10:46:27',
                'updated_at' => '2020-06-04 10:46:27',
            ),
        ));
        
        
    }
}