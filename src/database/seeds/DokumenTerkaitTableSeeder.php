<?php

use Illuminate\Database\Seeder;

class DokumenTerkaitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dokumen_terkait')->delete();
        
        \DB::table('dokumen_terkait')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area_id' => 2,
                'nama' => 'Kebijakan SMPI',
                'is_active' => 1,
                'created_at' => '2020-06-05 12:42:02',
                'updated_at' => '2020-06-05 12:46:00',
            ),
            1 => 
            array (
                'id' => 2,
                'area_id' => 3,
                'nama' => 'Risk Assessment & RTP',
                'is_active' => 1,
                'created_at' => '2020-06-05 12:43:42',
                'updated_at' => '2020-06-05 12:43:42',
            ),
        ));
        
        
    }
}