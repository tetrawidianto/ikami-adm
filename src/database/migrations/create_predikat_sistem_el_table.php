<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredikatSistemElTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predikat_sistem_el', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_sistem_el_id');
            $table->foreign('kategori_sistem_el_id')->references('id')->on('kategori_sistem_el')
                ->onDelete('cascade');
            $table->unsignedBigInteger('predikat_id');
            $table->foreign('predikat_id')->references('id')->on('predikat')
                ->onDelete('cascade');
            $table->unsignedInteger('nilai_min');
            $table->unsignedInteger('nilai_mak');
            $table->timestamps();
            $table->unique(['kategori_sistem_el_id', 'predikat_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predikat_sistem_el');
    }
}
