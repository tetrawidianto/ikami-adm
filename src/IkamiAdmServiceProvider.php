<?php

namespace IkamiAdm;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class IkamiAdmServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Route::group($this->backpackRoute(), function () {
            $this->loadRoutesFrom(__DIR__.'/routes/backpack.php');
        });

        $this->loadViewsFrom(__DIR__.'/views', 'ikami-adm');
        
        $this->publishes([
            __DIR__.'/database/migrations/create_sektor_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:01')).'_create_sektor_table.php'),
            __DIR__.'/database/migrations/create_subsektor_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:02')).'_create_subsektor_table.php'),
            __DIR__.'/database/migrations/create_sektor_user_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:03')).'_create_sektor_user_table.php'),
            __DIR__.'/database/migrations/create_penyedia_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:04')).'_create_penyedia_table.php'),
            __DIR__.'/database/migrations/create_pengguna_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:05')).'_create_pengguna_table.php'),
            __DIR__.'/database/migrations/create_sistem_el_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:06')).'_create_sistem_el_table.php'),
            __DIR__.'/database/migrations/create_asesi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:07')).'_create_asesi_table.php'),
            __DIR__.'/database/migrations/create_versi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:08')).'_create_versi_table.php'),
            __DIR__.'/database/migrations/create_area_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:09')).'_create_area_table.php'),
            __DIR__.'/database/migrations/create_area_versi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:10')).'_create_area_versi_table.php'),
            __DIR__.'/database/migrations/create_aspek_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:11')).'_create_aspek_table.php'),
            __DIR__.'/database/migrations/create_pilihan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:12')).'_create_pilihan_table.php'),
            __DIR__.'/database/migrations/create_jawaban_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:13')).'_create_jawaban_table.php'),
            __DIR__.'/database/migrations/create_jawaban_pilihan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:14')).'_create_jawaban_pilihan_table.php'),
            __DIR__.'/database/migrations/create_kesiapan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:15')).'_create_kesiapan_table.php'),
            __DIR__.'/database/migrations/create_kematangan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:16')).'_create_kematangan_table.php'),
            __DIR__.'/database/migrations/create_pertanyaan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:17')).'_create_pertanyaan_table.php'),
            __DIR__.'/database/migrations/create_penyaringan_awal_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:18')).'_create_penyaringan_awal_table.php'),
            __DIR__.'/database/migrations/create_kematangan_baru_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:19')).'_create_kematangan_baru_table.php'),
            __DIR__.'/database/migrations/create_pemeringkatan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:20')).'_create_pemeringkatan_table.php'),
            __DIR__.'/database/migrations/create_kategori_sistem_el_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:21')).'_create_kategori_sistem_el_table.php'),
            __DIR__.'/database/migrations/create_opini_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:22')).'_create_opini_table.php'),
            __DIR__.'/database/migrations/create_opini_sistem_el_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:23')).'_create_opini_sistem_el_table.php'),
            __DIR__.'/database/migrations/create_asesmen_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:24')).'_create_asesmen_table.php'),
            __DIR__.'/database/migrations/create_informasi_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:25')).'_create_informasi_table.php'),
            __DIR__.'/database/migrations/create_area_utama_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:26')).'_create_area_utama_table.php'),
            __DIR__.'/database/migrations/create_aspek_suplemen_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:27')).'_create_aspek_suplemen_table.php'),
            __DIR__.'/database/migrations/create_penugasan_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:28')).'_create_penugasan_table.php'),
            __DIR__.'/database/migrations/create_dokumen_da_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:29')).'_create_dokumen_da_table.php'),
            __DIR__.'/database/migrations/create_statuses_table.php' => database_path('migrations/'.date('Y_m_d_His', strtotime('2021-01-17 00:00:30')).'_create_statuses_table.php'),
        ], 'ikami-migration');

        $this->publishes([
            __DIR__.'/database/seeds/AreaTableSeeder.php' => database_path('seeds/AreaTableSeeder.php'),
            __DIR__.'/database/seeds/AreaVersiTableSeeder.php' => database_path('seeds/AreaVersiTableSeeder.php'),
            __DIR__.'/database/seeds/AspekTableSeeder.php' => database_path('seeds/AspekTableSeeder.php'),
            __DIR__.'/database/seeds/DatabaseSeeder.php' => database_path('seeds/DatabaseSeeder.php'),
            __DIR__.'/database/seeds/JawabanPilihanTableSeeder.php' => database_path('seeds/JawabanPilihanTableSeeder.php'),
            __DIR__.'/database/seeds/JawabanTableSeeder.php' => database_path('seeds/JawabanTableSeeder.php'),
            __DIR__.'/database/seeds/KategoriSistemElTableSeeder.php' => database_path('seeds/KategoriSistemElTableSeeder.php'),
            __DIR__.'/database/seeds/KematanganBaruTableSeeder.php' => database_path('seeds/KematanganBaruTableSeeder.php'),
            __DIR__.'/database/seeds/KematanganTableSeeder.php' => database_path('seeds/KematanganTableSeeder.php'),
            __DIR__.'/database/seeds/KesiapanTableSeeder.php' => database_path('seeds/KesiapanTableSeeder.php'),
            __DIR__.'/database/seeds/OpiniSistemElTableSeeder.php' => database_path('seeds/OpiniSistemElTableSeeder.php'),
            __DIR__.'/database/seeds/OpiniTableSeeder.php' => database_path('seeds/OpiniTableSeeder.php'),
            __DIR__.'/database/seeds/PemeringkatanTableSeeder.php' => database_path('seeds/PemeringkatanTableSeeder.php'),
            __DIR__.'/database/seeds/PenyaringanAwalTableSeeder.php' => database_path('seeds/PenyaringanAwalTableSeeder.php'),
            __DIR__.'/database/seeds/PermissionsTableSeeder.php' => database_path('seeds/PermissionsTableSeeder.php'),
            __DIR__.'/database/seeds/PertanyaanTableSeeder.php' => database_path('seeds/PertanyaanTableSeeder.php'),
            __DIR__.'/database/seeds/PilihanTableSeeder.php' => database_path('seeds/PilihanTableSeeder.php'),
            __DIR__.'/database/seeds/RoleHasPermissionsTableSeeder.php' => database_path('seeds/RoleHasPermissionsTableSeeder.php'),
            __DIR__.'/database/seeds/RolesTableSeeder.php' => database_path('seeds/RolesTableSeeder.php'),
            __DIR__.'/database/seeds/VersiTableSeeder.php' => database_path('seeds/VersiTableSeeder.php'),
        ], 'ikami-seed');
    }

    private function backpackRoute()
    {
        return [
            'prefix'     => config('backpack.base.route_prefix'),
            'middleware' => ['web', backpack_middleware()],
            'namespace'  => 'IkamiAdm\Controllers'
        ];
    }
}
