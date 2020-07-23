<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->text('pengantar')->nullable();
            $table->text('teks');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('area')
                ->onDelete('cascade');
            $table->unsignedBigInteger('aspek_id')->nullable();
            $table->foreign('aspek_id')->references('id')->on('aspek')
                ->onDelete('cascade');
            $table->unsignedBigInteger('pilihan_id');
            $table->foreign('pilihan_id')->references('id')->on('pilihan')
                ->onDelete('cascade');
            $table->unsignedBigInteger('jawaban_0');
            $table->foreign('jawaban_0')->references('id')->on('jawaban')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kesiapan_id')->nullable();
            $table->foreign('kesiapan_id')->references('id')->on('kesiapan')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kematangan_id')->nullable();
            $table->foreign('kematangan_id')->references('id')->on('kematangan')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pertanyaan');
    }
}
