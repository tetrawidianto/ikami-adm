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
                'name' => 'Verifikator',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:21:17',
                'updated_at' => '2020-05-21 10:21:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pengguna',
                'guard_name' => 'web',
                'created_at' => '2020-05-21 10:31:32',
                'updated_at' => '2020-05-21 10:31:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bakal Calon Pengguna',
                'guard_name' => 'web',
                'created_at' => '2020-05-24 23:17:29',
                'updated_at' => '2020-05-25 16:53:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Calon Pengguna',
                'guard_name' => 'web',
                'created_at' => '2020-05-25 16:53:49',
                'updated_at' => '2020-05-25 16:53:49',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Asesor',
                'guard_name' => 'web',
                'created_at' => '2020-06-06 13:55:47',
                'updated_at' => '2020-06-06 13:55:47',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2020-06-15 12:44:01',
                'updated_at' => '2020-06-15 12:44:01',
            ),
        ));
        
        
    }
}