<?php

use Illuminate\Database\Seeder;

class OpiniSistemElTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opini_sistem_el')->delete();
        
        \DB::table('opini_sistem_el')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kategori_sistem_el_id' => 1,
                'opini_id' => 1,
                'nilai_min' => 0,
                'nilai_mak' => 174,
                'created_at' => '2020-06-04 11:51:02',
                'updated_at' => '2020-06-04 11:51:02',
            ),
            1 => 
            array (
                'id' => 2,
                'kategori_sistem_el_id' => 1,
                'opini_id' => 2,
                'nilai_min' => 175,
                'nilai_mak' => 312,
                'created_at' => '2020-06-04 11:51:18',
                'updated_at' => '2020-06-04 11:51:18',
            ),
            2 => 
            array (
                'id' => 3,
                'kategori_sistem_el_id' => 1,
                'opini_id' => 3,
                'nilai_min' => 313,
                'nilai_mak' => 535,
                'created_at' => '2020-06-04 11:51:33',
                'updated_at' => '2020-06-04 11:51:33',
            ),
            3 => 
            array (
                'id' => 4,
                'kategori_sistem_el_id' => 1,
                'opini_id' => 4,
                'nilai_min' => 536,
                'nilai_mak' => 645,
                'created_at' => '2020-06-04 11:51:47',
                'updated_at' => '2020-06-04 11:51:47',
            ),
            4 => 
            array (
                'id' => 5,
                'kategori_sistem_el_id' => 2,
                'opini_id' => 1,
                'nilai_min' => 0,
                'nilai_mak' => 272,
                'created_at' => '2020-06-04 11:52:02',
                'updated_at' => '2020-06-04 11:52:02',
            ),
            5 => 
            array (
                'id' => 7,
                'kategori_sistem_el_id' => 2,
                'opini_id' => 2,
                'nilai_min' => 273,
                'nilai_mak' => 455,
                'created_at' => '2020-06-04 11:52:38',
                'updated_at' => '2020-06-04 11:52:38',
            ),
            6 => 
            array (
                'id' => 8,
                'kategori_sistem_el_id' => 2,
                'opini_id' => 3,
                'nilai_min' => 456,
                'nilai_mak' => 583,
                'created_at' => '2020-06-04 11:52:56',
                'updated_at' => '2020-06-04 11:52:56',
            ),
            7 => 
            array (
                'id' => 9,
                'kategori_sistem_el_id' => 2,
                'opini_id' => 4,
                'nilai_min' => 584,
                'nilai_mak' => 645,
                'created_at' => '2020-06-04 11:53:13',
                'updated_at' => '2020-06-04 11:53:13',
            ),
            8 => 
            array (
                'id' => 10,
                'kategori_sistem_el_id' => 3,
                'opini_id' => 1,
                'nilai_min' => 0,
                'nilai_mak' => 333,
                'created_at' => '2020-06-04 11:53:28',
                'updated_at' => '2020-06-04 11:53:28',
            ),
            9 => 
            array (
                'id' => 11,
                'kategori_sistem_el_id' => 3,
                'opini_id' => 2,
                'nilai_min' => 334,
                'nilai_mak' => 535,
                'created_at' => '2020-06-04 11:53:45',
                'updated_at' => '2020-06-04 11:53:45',
            ),
            10 => 
            array (
                'id' => 12,
                'kategori_sistem_el_id' => 3,
                'opini_id' => 3,
                'nilai_min' => 536,
                'nilai_mak' => 609,
                'created_at' => '2020-06-04 11:53:58',
                'updated_at' => '2020-06-04 11:53:58',
            ),
            11 => 
            array (
                'id' => 13,
                'kategori_sistem_el_id' => 3,
                'opini_id' => 4,
                'nilai_min' => 610,
                'nilai_mak' => 645,
                'created_at' => '2020-06-04 11:54:13',
                'updated_at' => '2020-06-04 11:54:13',
            ),
        ));
        
        
    }
}