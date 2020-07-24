<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyaringanAwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyaringan_awal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kesiapan_id');
            $table->foreign('kesiapan_id')->references('id')->on('kesiapan')
                ->onDelete('cascade');
            $table->unsignedBigInteger('pilihan_id');
            $table->foreign('pilihan_id')->references('id')->on('pilihan')
                ->onDelete('cascade');
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('jawaban_id')->references('id')->on('jawaban')
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
        Schema::dropIfExists('penyaringan_awal');
    }
}
