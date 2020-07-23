<?php

use Illuminate\Database\Seeder;

class AreaVersiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('area_versi')->delete();
        
        \DB::table('area_versi')->insert(array (
            0 => 
            array (
                'area_id' => 7,
                'versi_id' => 1,
                'created_at' => '2020-05-26 03:40:43',
                'updated_at' => '2020-05-26 03:40:43',
            ),
            1 => 
            array (
                'area_id' => 6,
                'versi_id' => 1,
                'created_at' => '2020-05-26 03:40:54',
                'updated_at' => '2020-05-26 03:40:54',
            ),
            2 => 
            array (
                'area_id' => 5,
                'versi_id' => 1,
                'created_at' => '2020-05-26 03:41:04',
                'updated_at' => '2020-05-26 03:41:04',
            ),
            3 => 
            array (
                'area_id' => 4,
                'versi_id' => 1,
                'created_at' => '2020-05-26 03:41:13',
                'updated_at' => '2020-05-26 03:41:13',
            ),
            4 => 
            array (
                'area_id' => 3,
                'versi_id' => 1,
                'created_at' => '2020-05-26 03:41:23',
                'updated_at' => '2020-05-26 03:41:23',
            ),
            5 => 
            array (
                'area_id' => 2,
                'versi_id' => 1,
                'created_at' => '2020-05-26 03:41:31',
                'updated_at' => '2020-05-26 03:41:31',
            ),
            6 => 
            array (
                'area_id' => 1,
                'versi_id' => 1,
                'created_at' => '2020-05-26 03:41:46',
                'updated_at' => '2020-05-26 03:41:46',
            ),
        ));
        
        
    }
}