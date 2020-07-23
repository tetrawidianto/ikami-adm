<?php

namespace IkamiAdm;

use Illuminate\Support\ServiceProvider;

class IkamiAdmServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $timestamps = date('Y_m_d_His', strtotime('1986-01-17'));
        
        $this->publishes([
            __DIR__.'/database/migrations/create_sektor_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:01')).'_create_sektor_table.php'),
            __DIR__.'/database/migrations/create_subsektor_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:02')).'_create_subsektor_table.php'),
            __DIR__.'/database/migrations/create_sektor_user_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:03')).'_create_sektor_user_table.php'),
            __DIR__.'/database/migrations/create_penyedia_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:04')).'_create_penyedia_table.php'),
            __DIR__.'/database/migrations/create_pengguna_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:05')).'_create_pengguna_table.php'),
            __DIR__.'/database/migrations/create_sistem_el_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:06')).'_create_sistem_el_table.php'),
            __DIR__.'/database/migrations/create_asesi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:07')).'_create_asesi_table.php'),
            __DIR__.'/database/migrations/create_versi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:08')).'_create_versi_table.php'),
            __DIR__.'/database/migrations/create_area_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:09')).'_create_area_table.php'),
            __DIR__.'/database/migrations/create_area_versi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:10')).'_create_area_versi_table.php'),
            __DIR__.'/database/migrations/create_aspek_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:11')).'_create_aspek_table.php'),
            __DIR__.'/database/migrations/create_pilihan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:12')).'_create_pilihan_table.php'),
            __DIR__.'/database/migrations/create_jawaban_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:13')).'_create_jawaban_table.php'),
            __DIR__.'/database/migrations/create_kesiapan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:14')).'_create_kesiapan_table.php'),
            __DIR__.'/database/migrations/create_kematangan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:15')).'_create_kematangan_table.php'),
            __DIR__.'/database/migrations/create_pertanyaan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:16')).'_create_pertanyaan_table.php'),
            __DIR__.'/database/migrations/create_saringan_awal_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:17')).'_create_saringan_awal_table.php'),
            __DIR__.'/database/migrations/create_kematangan_baru_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:18')).'_create_kematangan_baru_table.php'),
            __DIR__.'/database/migrations/create_peringkat_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:19')).'_create_peringkat_table.php'),
            __DIR__.'/database/migrations/create_kategori_sistem_el_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:20')).'_create_kategori_sistem_el_table.php'),
            __DIR__.'/database/migrations/create_predikat_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:21')).'_create_predikat_table.php'),
            __DIR__.'/database/migrations/create_predikat_sistem_el_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:22')).'_create_predikat_sistem_el_table.php'),
            __DIR__.'/database/migrations/create_asesmen_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:23')).'_create_asesmen_table.php'),
            __DIR__.'/database/migrations/create_informasi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:24')).'_create_informasi_table.php'),
            __DIR__.'/database/migrations/create_area_utama_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:25')).'_create_area_utama_table.php'),
            __DIR__.'/database/migrations/create_aspek_suplemen_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:26')).'_create_aspek_suplemen_table.php'),
            __DIR__.'/database/migrations/create_asesmen_user_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:27')).'_create_asesmen_user_table.php'),
            __DIR__.'/database/migrations/create_dokumen_da_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:28')).'_create_dokumen_da_table.php'),
            __DIR__.'/database/migrations/create_statuses_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('1986-01-17 00:00:29')).'_create_statuses_table.php'),
        ], 'ikami-migration');
    }
}
