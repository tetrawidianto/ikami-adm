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
            $table->unsignedBigInteger('sistem_el_id');
            $table->foreign('sistem_el_id')->references('id')->on('sistem_el')
                ->onDelete('cascade');
            $table->unsignedBigInteger('versi_id');
            $table->foreign('versi_id')->references('id')->on('versi')
                ->onDelete('cascade');
            $table->unsignedBigInteger('inisiator_id');
            $table->string('inisiator_type');

            $table->unsignedInteger('total')->default(0);
            $table->unsignedInteger('terjawab')->default(0);
            $table->unsignedInteger('terjawab_baru')->default(0);
            $table->unsignedInteger('skor')->default(10);

            $table->unsignedBigInteger('kategori_sistem_el_id')->nullable();
            $table->foreign('kategori_sistem_el_id')->references('id')->on('kategori_sistem_el')
                ->onDelete('cascade');

            $table->unsignedInteger('utama_total')->default(0);
            $table->unsignedInteger('utama_terjawab')->default(0);
            $table->unsignedInteger('utama_terjawab_baru')->default(0);
            $table->unsignedInteger('utama_skor')->default(0);

            $table->unsignedBigInteger('predikat_id')->nullable();
            $table->foreign('predikat_id')->references('id')->on('predikat')
                ->onDelete('cascade');
            
            $table->unsignedInteger('suplemen_total')->default(0);
            $table->unsignedInteger('suplemen_terjawab')->default(0);
            $table->unsignedInteger('suplemen_terjawab_baru')->default(0);

            $table->boolean('da')->default(false);
            $table->datetime('tanggal')->nullable();
            $table->time('jam')->nullable();
            $table->string('tempat')->nullable();
            $table->string('peta')->nullable();
            $table->boolean('terkunci')->default(true);
            $table->string('kode_akses')->nullable();
            $table->string('berita_acara')->nullable();
            $table->boolean('selesai')->default(false);
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
