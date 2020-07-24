<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'verifikator',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:21:17',
                'updated_at' => '2020-07-07 00:41:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'pengguna',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:31:32',
                'updated_at' => '2020-07-07 00:41:22',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'asesor',
                'guard_name' => 'web',
                'created_at' => '2020-06-06 13:55:47',
                'updated_at' => '2020-07-07 00:40:46',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2020-06-15 12:44:01',
                'updated_at' => '2020-07-07 00:40:38',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'pimpinan',
                'guard_name' => 'web',
                'created_at' => '2020-07-13 14:40:19',
                'updated_at' => '2020-07-13 14:40:19',
            ),
        ));
        
        
    }
}