<?php

use Illuminate\Database\Seeder;

class PemeringkatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pemeringkatan')->delete();
        
        \DB::table('pemeringkatan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kematangan_baru_id' => 2,
                'kematangan_id' => 2,
                'kesiapan_id' => 1,
                'jawaban' => '[{"nilai":"2","jumlah":"4"},{"nilai":"1"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-02-29 05:03:15',
                'updated_at' => '2020-02-29 05:03:15',
            ),
            1 => 
            array (
                'id' => 2,
                'kematangan_baru_id' => 3,
                'kematangan_id' => 2,
                'kesiapan_id' => 1,
                'jawaban' => '[{"nilai":"2"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:23:50',
                'updated_at' => '2020-03-02 02:23:50',
            ),
            2 => 
            array (
                'id' => 3,
                'kematangan_baru_id' => 3,
                'kematangan_id' => 2,
                'kesiapan_id' => 2,
                'jawaban' => '[{"nilai":"2"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:24:18',
                'updated_at' => '2020-03-02 02:24:18',
            ),
            3 => 
            array (
                'id' => 4,
                'kematangan_baru_id' => 4,
                'kematangan_id' => 2,
                'kesiapan_id' => 1,
                'jawaban' => '[{"nilai":"3"}]',
                'proporsi' => '0.8',
                'created_at' => '2020-03-02 02:28:42',
                'updated_at' => '2020-03-02 02:28:42',
            ),
            4 => 
            array (
                'id' => 5,
                'kematangan_baru_id' => 4,
                'kematangan_id' => 2,
                'kesiapan_id' => 2,
                'jawaban' => '[{"nilai":"3"}]',
                'proporsi' => '0.8',
                'created_at' => '2020-03-02 02:29:01',
                'updated_at' => '2020-03-02 02:29:01',
            ),
            5 => 
            array (
                'id' => 6,
                'kematangan_baru_id' => 4,
                'kematangan_id' => 3,
                'kesiapan_id' => 1,
                'jawaban' => '[{"nilai":"3"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:29:37',
                'updated_at' => '2020-03-02 02:29:37',
            ),
            6 => 
            array (
                'id' => 7,
                'kematangan_baru_id' => 4,
                'kematangan_id' => 3,
                'kesiapan_id' => 2,
                'jawaban' => '[{"nilai":"1","jumlah":"2"},{"nilai":"2"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:30:17',
                'updated_at' => '2020-03-02 02:30:17',
            ),
            7 => 
            array (
                'id' => 8,
                'kematangan_baru_id' => 4,
                'kematangan_id' => 3,
                'kesiapan_id' => 3,
                'jawaban' => '[{"nilai":"1","jumlah":"1"},{"nilai":"2"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:31:22',
                'updated_at' => '2020-03-02 02:31:22',
            ),
            8 => 
            array (
                'id' => 9,
                'kematangan_baru_id' => 5,
                'kematangan_id' => 3,
                'kesiapan_id' => 2,
                'jawaban' => '[{"jumlah":"2","nilai":"2"},{"nilai":"3"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:34:00',
                'updated_at' => '2020-03-02 02:34:00',
            ),
            9 => 
            array (
                'id' => 10,
                'kematangan_baru_id' => 5,
                'kematangan_id' => 3,
                'kesiapan_id' => 3,
                'jawaban' => '[{"jumlah":"2","nilai":"2"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:35:17',
                'updated_at' => '2020-03-02 02:35:17',
            ),
            10 => 
            array (
                'id' => 11,
                'kematangan_baru_id' => 6,
                'kematangan_id' => 3,
                'kesiapan_id' => 2,
                'jawaban' => '[{"jumlah":"1","nilai":"2"},{"nilai":"3"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:36:45',
                'updated_at' => '2020-03-02 02:36:45',
            ),
            11 => 
            array (
                'id' => 12,
                'kematangan_baru_id' => 6,
                'kematangan_id' => 3,
                'kesiapan_id' => 3,
                'jawaban' => '[{"jumlah":"1","nilai":"2"},{"nilai":"3"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:38:21',
                'updated_at' => '2020-03-02 02:38:21',
            ),
            12 => 
            array (
                'id' => 13,
                'kematangan_baru_id' => 6,
                'kematangan_id' => 4,
                'kesiapan_id' => 3,
                'jawaban' => '[{"jumlah":"2","nilai":"2"},{"nilai":"1"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:38:57',
                'updated_at' => '2020-03-02 02:38:57',
            ),
            13 => 
            array (
                'id' => 14,
                'kematangan_baru_id' => 7,
                'kematangan_id' => 4,
                'kesiapan_id' => 3,
                'jawaban' => '[{"nilai":"3"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:39:51',
                'updated_at' => '2020-03-02 02:39:51',
            ),
            14 => 
            array (
                'id' => 15,
                'kematangan_baru_id' => 8,
                'kematangan_id' => 5,
                'kesiapan_id' => 3,
                'jawaban' => '[{"jumlah":"1","nilai":"2"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:40:29',
                'updated_at' => '2020-03-02 02:40:29',
            ),
            15 => 
            array (
                'id' => 16,
                'kematangan_baru_id' => 9,
                'kematangan_id' => 5,
                'kesiapan_id' => 3,
                'jawaban' => '[{"nilai":"3"}]',
                'proporsi' => '1.0',
                'created_at' => '2020-03-02 02:40:57',
                'updated_at' => '2020-03-02 02:40:57',
            ),
        ));
        
        
    }
}