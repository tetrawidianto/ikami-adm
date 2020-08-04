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
                'name' => 'verifikasi-penyedia',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:21:46',
                'updated_at' => '2020-07-07 01:18:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'verifikasi-sistem-el',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:21:54',
                'updated_at' => '2020-07-07 01:17:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'verifikasi-pengguna',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:22:07',
                'updated_at' => '2020-07-07 01:17:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'verifikasi-asesi',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:23:14',
                'updated_at' => '2020-07-07 01:17:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'registrasi-sistem-el',
                'guard_name' => 'web',
                'created_at' => '2020-05-22 06:47:06',
                'updated_at' => '2020-07-07 01:17:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'self-assessment',
                'guard_name' => 'web',
                'created_at' => '2020-05-22 06:47:15',
                'updated_at' => '2020-08-04 09:31:41',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'desktop-assessment',
                'guard_name' => 'web',
                'created_at' => '2020-06-06 21:16:10',
                'updated_at' => '2020-07-11 09:36:04',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'monitoring-da',
                'guard_name' => 'web',
                'created_at' => '2020-06-15 12:44:50',
                'updated_at' => '2020-08-04 09:31:52',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'monitoring-sistem-el',
                'guard_name' => 'web',
                'created_at' => '2020-07-17 08:42:34',
                'updated_at' => '2020-07-17 11:12:30',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'monitoring-va',
                'guard_name' => 'web',
                'created_at' => '2020-08-04 09:32:09',
                'updated_at' => '2020-08-04 09:32:09',
            ),
        ));
        
        
    }
}