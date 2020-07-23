<?php

use Illuminate\Database\Seeder;

class VersiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('versi')->delete();
        
        \DB::table('versi')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode' => 'V4.0',
                'deskripsi' => NULL,
                'is_active' => 1,
                'files' => NULL,
                'created_at' => '2020-05-25 17:17:45',
                'updated_at' => '2020-05-25 17:17:45',
            ),
        ));
        
        
    }
}