<?php

use Illuminate\Database\Seeder;

class OpiniTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opini')->delete();
        
        \DB::table('opini')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'TIDAK LAYAK',
                'created_at' => '2020-06-04 11:24:37',
                'updated_at' => '2020-06-04 11:24:37',
                'color' => 'danger',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'PEMENUHAN KERANGKA KERJA DASAR',
                'created_at' => '2020-06-04 11:24:55',
                'updated_at' => '2020-06-04 11:24:55',
                'color' => 'orange',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'CUKUP BAIK',
                'created_at' => '2020-06-04 11:25:06',
                'updated_at' => '2020-06-04 11:25:06',
                'color' => 'warning',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'BAIK',
                'created_at' => '2020-06-04 11:25:17',
                'updated_at' => '2020-07-06 23:22:21',
                'color' => 'success',
            ),
        ));
        
        
    }
}