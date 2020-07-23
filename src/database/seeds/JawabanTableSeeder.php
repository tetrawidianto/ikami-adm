<?php

use Illuminate\Database\Seeder;

class JawabanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jawaban')->delete();
        
        \DB::table('jawaban')->insert(array (
            0 => 
            array (
                'id' => 1,
                'teks' => 'Lebih dari Rp.30 Miliar',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:00:12',
                'updated_at' => '2020-06-01 08:00:12',
            ),
            1 => 
            array (
                'id' => 2,
                'teks' => 'Lebih dari Rp.3 Miliar s/d Rp.30 Miliar',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:00:31',
                'updated_at' => '2020-06-01 08:00:31',
            ),
            2 => 
            array (
                'id' => 3,
                'teks' => 'Kurang dari Rp.3 Miliar',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:01:02',
                'updated_at' => '2020-06-01 08:01:02',
            ),
            3 => 
            array (
                'id' => 4,
                'teks' => 'Lebih dari Rp.10 Miliar',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:01:13',
                'updated_at' => '2020-06-01 08:01:13',
            ),
            4 => 
            array (
                'id' => 5,
                'teks' => 'Lebih dari Rp.1 Miliar s/d Rp.10 Miliar',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:01:26',
                'updated_at' => '2020-06-01 08:01:26',
            ),
            5 => 
            array (
                'id' => 6,
                'teks' => 'Kurang dari Rp.1 Miliar',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:01:35',
                'updated_at' => '2020-06-01 08:01:35',
            ),
            6 => 
            array (
                'id' => 7,
                'teks' => 'Peraturan atau Standar nasional dan internasional',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:01:45',
                'updated_at' => '2020-06-01 08:01:45',
            ),
            7 => 
            array (
                'id' => 8,
                'teks' => 'Peraturan atau Standar nasional',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:01:58',
                'updated_at' => '2020-06-01 08:01:58',
            ),
            8 => 
            array (
                'id' => 9,
                'teks' => 'Tidak ada Peraturan khusus',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:02:08',
                'updated_at' => '2020-06-01 08:02:08',
            ),
            9 => 
            array (
                'id' => 10,
                'teks' => 'Teknik kriptografi khusus yang disertifikasi oleh Negara',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:02:17',
                'updated_at' => '2020-06-01 08:02:17',
            ),
            10 => 
            array (
                'id' => 11,
                'teks' => 'Teknik kriptografi sesuai standar industri, tersedia secara publik atau dikembangkan sendiri',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:02:24',
                'updated_at' => '2020-06-01 08:02:24',
            ),
            11 => 
            array (
                'id' => 12,
                'teks' => 'Tidak ada penggunaan teknik kriptografi',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:02:33',
                'updated_at' => '2020-06-01 08:02:33',
            ),
            12 => 
            array (
                'id' => 13,
                'teks' => 'Lebih dari 5.000 pengguna',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:02:41',
                'updated_at' => '2020-06-01 08:02:41',
            ),
            13 => 
            array (
                'id' => 14,
                'teks' => '1.000 sampai dengan 5.000 pengguna',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:02:52',
                'updated_at' => '2020-06-01 08:02:52',
            ),
            14 => 
            array (
                'id' => 15,
                'teks' => 'Kurang dari 1.000 pengguna',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:02:59',
                'updated_at' => '2020-06-01 08:02:59',
            ),
            15 => 
            array (
                'id' => 16,
                'teks' => 'Data pribadi yang memiliki hubungan dengan Data Pribadi lainnya',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:03:10',
                'updated_at' => '2020-06-01 08:03:10',
            ),
            16 => 
            array (
                'id' => 17,
                'teks' => 'Data pribadi yang bersifat individu dan/atau data pribadi yang terkait dengan kepemilikan badan usaha',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:03:18',
                'updated_at' => '2020-06-01 08:03:18',
            ),
            17 => 
            array (
                'id' => 18,
                'teks' => 'Tidak ada data pribadi',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:03:24',
                'updated_at' => '2020-06-01 08:03:24',
            ),
            18 => 
            array (
                'id' => 19,
                'teks' => 'Sangat Rahasia',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:03:31',
                'updated_at' => '2020-06-01 08:03:31',
            ),
            19 => 
            array (
                'id' => 20,
                'teks' => 'Rahasia dan/atau Terbatas',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:03:38',
                'updated_at' => '2020-06-01 08:03:38',
            ),
            20 => 
            array (
                'id' => 21,
                'teks' => 'Biasa',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:03:47',
                'updated_at' => '2020-06-01 08:03:47',
            ),
            21 => 
            array (
                'id' => 22,
                'teks' => 'Proses yang berisiko mengganggu hajat hidup orang  banyak dan memberi dampak langsung pada layanan publik',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:03:53',
                'updated_at' => '2020-06-01 08:03:53',
            ),
            22 => 
            array (
                'id' => 23,
                'teks' => 'Proses yang berisiko mengganggu hajat hidup orang banyak dan memberi dampak tidak langsung',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:04:00',
                'updated_at' => '2020-06-01 08:04:00',
            ),
            23 => 
            array (
                'id' => 24,
                'teks' => 'Proses yang hanya berdampak pada bisnis perusahaan',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:04:08',
                'updated_at' => '2020-06-01 08:04:08',
            ),
            24 => 
            array (
                'id' => 25,
                'teks' => 'Tidak tersedianya layanan publik berskala nasional atau membahayakan pertahanan keamanan negara',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:04:14',
                'updated_at' => '2020-06-01 08:04:14',
            ),
            25 => 
            array (
                'id' => 26,
                'teks' => 'Tidak tersedianya layanan publik dalam 1 propinsi atau lebih',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:04:25',
                'updated_at' => '2020-06-01 08:04:25',
            ),
            26 => 
            array (
                'id' => 27,
                'teks' => 'Tidak tersedianya layanan publik dalam 1 kabupaten/kota atau lebih',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:04:44',
                'updated_at' => '2020-06-01 08:04:44',
            ),
            27 => 
            array (
                'id' => 28,
                'teks' => 'Menimbulkan korban jiwa',
                'nilai' => 5,
                'created_at' => '2020-06-01 08:04:49',
                'updated_at' => '2020-06-01 08:04:49',
            ),
            28 => 
            array (
                'id' => 29,
                'teks' => 'Terbatas pada kerugian finansial',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:04:56',
                'updated_at' => '2020-06-01 08:04:56',
            ),
            29 => 
            array (
                'id' => 30,
            'teks' => 'Mengakibatkan gangguan operasional sementara (tidak membahayakan dan mengakibatkan kerugian finansial)',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:05:04',
                'updated_at' => '2020-06-01 08:05:04',
            ),
            30 => 
            array (
                'id' => 31,
                'teks' => 'Diterapkan Secara Menyeluruh',
                'nilai' => 3,
                'created_at' => '2020-06-01 08:05:15',
                'updated_at' => '2020-06-01 08:06:03',
            ),
            31 => 
            array (
                'id' => 32,
                'teks' => 'Dalam Penerapan / Diterapkan Sebagian',
                'nilai' => 2,
                'created_at' => '2020-06-01 08:05:23',
                'updated_at' => '2020-06-01 08:05:23',
            ),
            32 => 
            array (
                'id' => 33,
                'teks' => 'Dalam Perencanaan',
                'nilai' => 1,
                'created_at' => '2020-06-01 08:05:32',
                'updated_at' => '2020-06-01 08:05:32',
            ),
            33 => 
            array (
                'id' => 34,
                'teks' => 'Tidak Dilakukan',
                'nilai' => 0,
                'created_at' => '2020-06-01 08:05:45',
                'updated_at' => '2020-06-01 08:05:45',
            ),
        ));
        
        
    }
}