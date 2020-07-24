<?php 

use Illuminate\Support\Facades\Route;

Route::crud('area', 'AreaCrudController');
Route::crud('versi', 'VersiCrudController');
Route::crud('aspek', 'AspekCrudController');
Route::crud('kategori-sistem-el', 'KategoriSistemElCrudController');
Route::crud('penyedia', 'PenyediaCrudController');
Route::crud('pilihan', 'PilihanCrudController');
Route::crud('jawaban', 'JawabanCrudController');
Route::crud('pertanyaan', 'PertanyaanCrudController');
Route::crud('pengguna', 'PenggunaCrudController');
Route::crud('sistem-el', 'SistemElCrudController');
Route::crud('asesi', 'AsesiCrudController');
Route::crud('asesmen', 'AsesmenCrudController');
Route::crud('kesiapan', 'KesiapanCrudController');
Route::crud('kematangan', 'KematanganCrudController');
Route::crud('kematangan-baru', 'KematanganBaruCrudController');
Route::crud('penyaringan', 'PenyaringanCrudController');
Route::crud('pemeringkatan', 'PemeringkatanCrudController');
Route::crud('opini', 'OpiniCrudController');
Route::crud('opini-sistem-el', 'OpiniSistemElCrudController');
Route::crud('informasi', 'InformasiCrudController');
Route::crud('area-utama', 'AreaUtamaCrudController');
Route::crud('aspek-suplemen', 'AspekSuplemenCrudController');
Route::crud('sektor', 'SektorCrudController');
