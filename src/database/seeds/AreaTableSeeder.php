<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('area')->delete();
        
        \DB::table('area')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Kategori Sistem Elektronik',
                'deskripsi' => NULL,
                'created_at' => '2020-05-26 03:21:19',
                'updated_at' => '2020-05-26 03:21:19',
                'badge' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Tata Kelola Keamanan Informasi',
                'deskripsi' => NULL,
                'created_at' => '2020-05-26 03:21:36',
                'updated_at' => '2020-05-26 03:21:36',
                'badge' => 'info',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Pengelolaan Resiko Keamanan Informasi',
                'deskripsi' => NULL,
                'created_at' => '2020-05-26 03:21:53',
                'updated_at' => '2020-05-26 03:21:53',
                'badge' => 'danger',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Kerangka Kerja Keamanan Informasi',
                'deskripsi' => NULL,
                'created_at' => '2020-05-26 03:22:13',
                'updated_at' => '2020-05-26 03:22:13',
                'badge' => 'primary',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Pengelolaan Aset Informasi',
                'deskripsi' => NULL,
                'created_at' => '2020-05-26 03:22:27',
                'updated_at' => '2020-05-26 03:22:27',
                'badge' => 'success',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Teknologi dan Keamanan Informasi',
                'deskripsi' => NULL,
                'created_at' => '2020-05-26 03:22:43',
                'updated_at' => '2020-05-26 03:22:43',
                'badge' => 'warning',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Suplemen',
                'deskripsi' => NULL,
                'created_at' => '2020-05-26 03:22:52',
                'updated_at' => '2020-07-06 11:54:21',
                'badge' => NULL,
            ),
        ));
        
        
    }
}