<?php

use Illuminate\Database\Seeder;

class KategoriSistemElTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_sistem_el')->delete();
        
        \DB::table('kategori_sistem_el')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'RENDAH',
                'nilai_min' => 10,
                'nilai_mak' => 15,
                'created_at' => '2020-06-04 11:15:08',
                'updated_at' => '2020-06-04 11:15:08',
                'color' => 'success',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'TINGGI',
                'nilai_min' => 16,
                'nilai_mak' => 34,
                'created_at' => '2020-06-04 11:15:30',
                'updated_at' => '2020-06-04 11:15:30',
                'color' => 'warning',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'STRATEGIS',
                'nilai_min' => 35,
                'nilai_mak' => 50,
                'created_at' => '2020-06-04 11:15:47',
                'updated_at' => '2020-07-06 12:59:31',
                'color' => 'danger',
            ),
        ));
        
        
    }
}