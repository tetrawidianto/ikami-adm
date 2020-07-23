<?php

use Illuminate\Database\Seeder;

class KematanganTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kematangan')->delete();
        
        \DB::table('kematangan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Tingkat I',
                'created_at' => '2020-06-03 08:27:21',
                'updated_at' => '2020-06-03 08:27:21',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Tingkat II',
                'created_at' => '2020-06-03 08:27:31',
                'updated_at' => '2020-06-03 08:27:31',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Tingkat III',
                'created_at' => '2020-06-03 08:27:41',
                'updated_at' => '2020-06-03 08:27:41',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Tingkat IV',
                'created_at' => '2020-06-03 08:27:48',
                'updated_at' => '2020-06-03 08:28:09',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Tingkat V',
                'created_at' => '2020-06-03 08:28:19',
                'updated_at' => '2020-06-03 08:28:19',
            ),
        ));
        
        
    }
}