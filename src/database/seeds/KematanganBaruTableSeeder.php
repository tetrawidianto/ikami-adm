<?php

use Illuminate\Database\Seeder;

class KematanganBaruTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kematangan_baru')->delete();
        
        \DB::table('kematangan_baru')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'I',
                'created_at' => '2020-06-04 10:34:33',
                'updated_at' => '2020-06-04 10:34:33',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'I+',
                'created_at' => '2020-06-04 10:34:41',
                'updated_at' => '2020-06-04 10:34:41',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'II',
                'created_at' => '2020-06-04 10:34:47',
                'updated_at' => '2020-06-04 10:34:47',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'II+',
                'created_at' => '2020-06-04 10:34:55',
                'updated_at' => '2020-06-04 10:34:55',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'III',
                'created_at' => '2020-06-04 10:35:02',
                'updated_at' => '2020-06-04 10:35:02',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'III+',
                'created_at' => '2020-06-04 10:35:08',
                'updated_at' => '2020-06-04 10:35:08',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'IV',
                'created_at' => '2020-06-04 10:35:14',
                'updated_at' => '2020-06-04 10:35:14',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'IV+',
                'created_at' => '2020-06-04 10:35:21',
                'updated_at' => '2020-06-04 10:35:21',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'V',
                'created_at' => '2020-06-04 10:35:27',
                'updated_at' => '2020-06-04 10:35:27',
            ),
        ));
        
        
    }
}