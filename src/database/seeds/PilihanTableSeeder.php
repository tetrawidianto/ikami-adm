<?php

use Illuminate\Database\Seeder;

class PilihanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pilihan')->delete();
        
        \DB::table('pilihan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Nilai Investasi',
                'created_at' => '2020-06-01 07:53:42',
                'updated_at' => '2020-06-01 07:53:42',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Total Anggaran',
                'created_at' => '2020-06-01 07:54:12',
                'updated_at' => '2020-06-01 07:56:50',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Kepatuhan',
                'created_at' => '2020-06-01 07:54:30',
                'updated_at' => '2020-06-01 07:54:30',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Teknik Kriptografi',
                'created_at' => '2020-06-01 07:54:44',
                'updated_at' => '2020-06-01 07:54:44',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Jumlah Pengguna',
                'created_at' => '2020-06-01 07:55:00',
                'updated_at' => '2020-06-01 07:55:00',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Data Pribadi',
                'created_at' => '2020-06-01 07:55:11',
                'updated_at' => '2020-06-01 07:55:11',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Klasifikasi Data',
                'created_at' => '2020-06-01 07:55:25',
                'updated_at' => '2020-06-01 07:55:25',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Kekritisan Proses',
                'created_at' => '2020-06-01 07:55:42',
                'updated_at' => '2020-06-01 07:55:42',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'Dampak Kegagalan',
                'created_at' => '2020-06-01 07:55:54',
                'updated_at' => '2020-06-01 07:55:54',
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'Potensi Kerugian',
                'created_at' => '2020-06-01 07:56:04',
                'updated_at' => '2020-06-01 07:56:04',
            ),
            10 => 
            array (
                'id' => 11,
                'nama' => 'Status Pengamanan',
                'created_at' => '2020-06-03 07:45:53',
                'updated_at' => '2020-06-03 07:45:53',
            ),
        ));
        
        
    }
}