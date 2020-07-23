<?php

use Illuminate\Database\Seeder;

class KesiapanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kesiapan')->delete();
        
        \DB::table('kesiapan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Tahap I',
                'created_at' => '2020-06-03 08:15:02',
                'updated_at' => '2020-06-03 08:15:02',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Tahap II',
                'created_at' => '2020-06-03 08:15:11',
                'updated_at' => '2020-06-03 08:15:11',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Tahap III',
                'created_at' => '2020-06-03 08:15:19',
                'updated_at' => '2020-06-03 08:15:19',
            ),
        ));
        
        
    }
}