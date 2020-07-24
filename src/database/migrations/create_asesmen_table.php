<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmen', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sistem_el_id');
            $table->foreign('sistem_el_id')->references('id')->on('sistem_el')
                ->onDelete('cascade');
            $table->unsignedBigInteger('versi_id');
            $table->foreign('versi_id')->references('id')->on('versi')
                ->onDelete('cascade');
            $table->unsignedBigInteger('inisiator_id');
            $table->string('inisiator_type');
            $table->unsignedInteger('total')->default(0);
            $table->unsignedInteger('terjawab')->default(0);
            $table->unsignedInteger('skor')->default(10);
            $table->unsignedBigInteger('kategori_sistem_el_id')->default(1);
            $table->foreign('kategori_sistem_el_id')->references('id')->on('kategori_sistem_el')
                ->onDelete('cascade');
            $table->unsignedInteger('total_utama')->default(0);
            $table->unsignedInteger('terjawab_utama')->default(0);
            $table->unsignedInteger('skor_utama')->default(0);
            $table->unsignedBigInteger('opini_id')->nullable();
            $table->foreign('opini_id')->references('id')->on('opini')
                ->onDelete('cascade');
            $table->unsignedInteger('total_suplemen')->default(0);
            $table->unsignedInteger('terjawab_suplemen')->default(0);
            $table->boolean('desktop_assessment')->default(false);
            $table->datetime('jadwal')->nullable();
            $table->string('tempat')->nullable();
            $table->boolean('selesai')->default(false);
            $table->unsignedInteger('terjawab_baru')->default(0);
            $table->unsignedInteger('terjawab_utama_baru')->default(0);
            $table->unsignedInteger('terjawab_suplemen_baru')->default(0);
            $table->time('waktu')->nullable();
            $table->boolean('terkunci')->default(true);
            $table->string('kode_akses')->nullable();
            $table->string('location')->nullable();
            $table->string('berita_acara')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesmen');
    }
}
