<?php

use Illuminate\Database\Seeder;

class JawabanPilihanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jawaban_pilihan')->delete();
        
        \DB::table('jawaban_pilihan')->insert(array (
            0 => 
            array (
                'jawaban_id' => 31,
                'pilihan_id' => 11,
                'created_at' => '2020-06-03 07:46:57',
                'updated_at' => '2020-06-03 07:46:57',
            ),
            1 => 
            array (
                'jawaban_id' => 32,
                'pilihan_id' => 11,
                'created_at' => '2020-06-03 07:46:57',
                'updated_at' => '2020-06-03 07:46:57',
            ),
            2 => 
            array (
                'jawaban_id' => 33,
                'pilihan_id' => 11,
                'created_at' => '2020-06-03 07:46:57',
                'updated_at' => '2020-06-03 07:46:57',
            ),
            3 => 
            array (
                'jawaban_id' => 34,
                'pilihan_id' => 11,
                'created_at' => '2020-06-03 07:46:57',
                'updated_at' => '2020-06-03 07:46:57',
            ),
            4 => 
            array (
                'jawaban_id' => 28,
                'pilihan_id' => 10,
                'created_at' => '2020-06-03 07:51:38',
                'updated_at' => '2020-06-03 07:51:38',
            ),
            5 => 
            array (
                'jawaban_id' => 29,
                'pilihan_id' => 10,
                'created_at' => '2020-06-03 07:51:38',
                'updated_at' => '2020-06-03 07:51:38',
            ),
            6 => 
            array (
                'jawaban_id' => 30,
                'pilihan_id' => 10,
                'created_at' => '2020-06-03 07:51:38',
                'updated_at' => '2020-06-03 07:51:38',
            ),
            7 => 
            array (
                'jawaban_id' => 25,
                'pilihan_id' => 9,
                'created_at' => '2020-06-03 07:51:57',
                'updated_at' => '2020-06-03 07:51:57',
            ),
            8 => 
            array (
                'jawaban_id' => 26,
                'pilihan_id' => 9,
                'created_at' => '2020-06-03 07:51:57',
                'updated_at' => '2020-06-03 07:51:57',
            ),
            9 => 
            array (
                'jawaban_id' => 27,
                'pilihan_id' => 9,
                'created_at' => '2020-06-03 07:51:57',
                'updated_at' => '2020-06-03 07:51:57',
            ),
            10 => 
            array (
                'jawaban_id' => 22,
                'pilihan_id' => 8,
                'created_at' => '2020-06-03 07:52:26',
                'updated_at' => '2020-06-03 07:52:26',
            ),
            11 => 
            array (
                'jawaban_id' => 23,
                'pilihan_id' => 8,
                'created_at' => '2020-06-03 07:52:26',
                'updated_at' => '2020-06-03 07:52:26',
            ),
            12 => 
            array (
                'jawaban_id' => 24,
                'pilihan_id' => 8,
                'created_at' => '2020-06-03 07:52:26',
                'updated_at' => '2020-06-03 07:52:26',
            ),
            13 => 
            array (
                'jawaban_id' => 19,
                'pilihan_id' => 7,
                'created_at' => '2020-06-03 07:52:44',
                'updated_at' => '2020-06-03 07:52:44',
            ),
            14 => 
            array (
                'jawaban_id' => 20,
                'pilihan_id' => 7,
                'created_at' => '2020-06-03 07:52:44',
                'updated_at' => '2020-06-03 07:52:44',
            ),
            15 => 
            array (
                'jawaban_id' => 21,
                'pilihan_id' => 7,
                'created_at' => '2020-06-03 07:52:44',
                'updated_at' => '2020-06-03 07:52:44',
            ),
            16 => 
            array (
                'jawaban_id' => 16,
                'pilihan_id' => 6,
                'created_at' => '2020-06-03 07:53:04',
                'updated_at' => '2020-06-03 07:53:04',
            ),
            17 => 
            array (
                'jawaban_id' => 17,
                'pilihan_id' => 6,
                'created_at' => '2020-06-03 07:53:04',
                'updated_at' => '2020-06-03 07:53:04',
            ),
            18 => 
            array (
                'jawaban_id' => 18,
                'pilihan_id' => 6,
                'created_at' => '2020-06-03 07:53:04',
                'updated_at' => '2020-06-03 07:53:04',
            ),
            19 => 
            array (
                'jawaban_id' => 13,
                'pilihan_id' => 5,
                'created_at' => '2020-06-03 07:53:23',
                'updated_at' => '2020-06-03 07:53:23',
            ),
            20 => 
            array (
                'jawaban_id' => 14,
                'pilihan_id' => 5,
                'created_at' => '2020-06-03 07:53:23',
                'updated_at' => '2020-06-03 07:53:23',
            ),
            21 => 
            array (
                'jawaban_id' => 15,
                'pilihan_id' => 5,
                'created_at' => '2020-06-03 07:53:23',
                'updated_at' => '2020-06-03 07:53:23',
            ),
            22 => 
            array (
                'jawaban_id' => 10,
                'pilihan_id' => 4,
                'created_at' => '2020-06-03 07:54:05',
                'updated_at' => '2020-06-03 07:54:05',
            ),
            23 => 
            array (
                'jawaban_id' => 11,
                'pilihan_id' => 4,
                'created_at' => '2020-06-03 07:54:05',
                'updated_at' => '2020-06-03 07:54:05',
            ),
            24 => 
            array (
                'jawaban_id' => 12,
                'pilihan_id' => 4,
                'created_at' => '2020-06-03 07:54:05',
                'updated_at' => '2020-06-03 07:54:05',
            ),
            25 => 
            array (
                'jawaban_id' => 7,
                'pilihan_id' => 3,
                'created_at' => '2020-06-03 07:54:49',
                'updated_at' => '2020-06-03 07:54:49',
            ),
            26 => 
            array (
                'jawaban_id' => 8,
                'pilihan_id' => 3,
                'created_at' => '2020-06-03 07:54:49',
                'updated_at' => '2020-06-03 07:54:49',
            ),
            27 => 
            array (
                'jawaban_id' => 9,
                'pilihan_id' => 3,
                'created_at' => '2020-06-03 07:54:49',
                'updated_at' => '2020-06-03 07:54:49',
            ),
            28 => 
            array (
                'jawaban_id' => 4,
                'pilihan_id' => 2,
                'created_at' => '2020-06-03 07:55:27',
                'updated_at' => '2020-06-03 07:55:27',
            ),
            29 => 
            array (
                'jawaban_id' => 5,
                'pilihan_id' => 2,
                'created_at' => '2020-06-03 07:55:27',
                'updated_at' => '2020-06-03 07:55:27',
            ),
            30 => 
            array (
                'jawaban_id' => 6,
                'pilihan_id' => 2,
                'created_at' => '2020-06-03 07:55:27',
                'updated_at' => '2020-06-03 07:55:27',
            ),
            31 => 
            array (
                'jawaban_id' => 1,
                'pilihan_id' => 1,
                'created_at' => '2020-06-03 07:56:14',
                'updated_at' => '2020-06-03 07:56:14',
            ),
            32 => 
            array (
                'jawaban_id' => 2,
                'pilihan_id' => 1,
                'created_at' => '2020-06-03 07:56:14',
                'updated_at' => '2020-06-03 07:56:14',
            ),
            33 => 
            array (
                'jawaban_id' => 3,
                'pilihan_id' => 1,
                'created_at' => '2020-06-03 07:56:15',
                'updated_at' => '2020-06-03 07:56:15',
            ),
        ));
        
        
    }
}