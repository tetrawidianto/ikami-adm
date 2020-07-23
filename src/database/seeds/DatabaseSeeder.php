<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(VersiTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(AspekTableSeeder::class);
        $this->call(AreaVersiTableSeeder::class);
        $this->call(PilihanTableSeeder::class);
        $this->call(JawabanTableSeeder::class);
        $this->call(JawabanPilihanTableSeeder::class);
        $this->call(KematanganTableSeeder::class);
        $this->call(KesiapanTableSeeder::class);
        $this->call(PertanyaanTableSeeder::class);
        $this->call(KematanganBaruTableSeeder::class);
        $this->call(PenyaringanAwalTableSeeder::class);
        $this->call(PemeringkatanTableSeeder::class);
        $this->call(KategoriSistemElTableSeeder::class);
        $this->call(OpiniTableSeeder::class);
        $this->call(OpiniSistemElTableSeeder::class);
        $this->call(DokumenTerkaitTableSeeder::class);
    }
}
