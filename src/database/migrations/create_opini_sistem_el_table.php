<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpiniSistemElTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opini_sistem_el', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_sistem_el_id');
            $table->foreign('kategori_sistem_el_id')->references('id')->on('kategori_sistem_el')
                ->onDelete('cascade');
            $table->unsignedBigInteger('opini_id');
            $table->foreign('opini_id')->references('id')->on('opini')
                ->onDelete('cascade');
            $table->unsignedInteger('nilai_min');
            $table->unsignedInteger('nilai_mak');
            $table->timestamps();
            $table->unique(['kategori_sistem_el_id', 'opini_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opini_sistem_el');
    }
}
