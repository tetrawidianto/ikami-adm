<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Verifikasi Penyedia',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:21:46',
                'updated_at' => '2020-05-22 06:52:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Verifikasi Sistem Elektronik',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:21:54',
                'updated_at' => '2020-05-21 10:21:54',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Verifikasi Pengguna',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:22:07',
                'updated_at' => '2020-05-22 06:51:49',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Verifikasi Asesi',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:23:14',
                'updated_at' => '2020-05-22 06:51:56',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Registrasi Sistem Elektronik',
                'guard_name' => 'web',
                'created_at' => '2020-05-22 06:47:06',
                'updated_at' => '2020-05-25 02:28:08',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Registrasi Asesmen',
                'guard_name' => 'web',
                'created_at' => '2020-05-22 06:47:15',
                'updated_at' => '2020-05-22 06:47:15',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Aktivasi Pengguna',
                'guard_name' => 'web',
                'created_at' => '2020-05-24 23:17:44',
                'updated_at' => '2020-05-24 23:17:44',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Registrasi Penyedia',
                'guard_name' => 'web',
                'created_at' => '2020-05-24 23:17:55',
                'updated_at' => '2020-05-24 23:17:55',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Evaluasi Asesmen',
                'guard_name' => 'web',
                'created_at' => '2020-06-06 21:16:10',
                'updated_at' => '2020-06-06 21:16:10',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Penjadwalan Asesmen',
                'guard_name' => 'web',
                'created_at' => '2020-06-15 12:44:50',
                'updated_at' => '2020-06-15 12:44:50',
            ),
        ));
        
        
    }
}