<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemElTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistem_el', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyedia_id');
            $table->foreign('penyedia_id')->references('id')->on('penyedia')
                ->onDelete('cascade');
            $table->string('nama');
            $table->text('deskripsi');
            $table->unsignedBigInteger('sektor_id')->nullable();
            $table->foreign('sektor_id')->references('id')->on('sektor')
                ->onDelete('cascade');
            $table->unsignedBigInteger('subsektor_id')->nullable();
            $table->foreign('subsektor_id')->references('id')->on('subsektor')
                ->onDelete('cascade');
            $table->unsignedBigInteger('inisiator_id');
            $table->string('inisiator_type');
            $table->timestamps();
            $table->unique(['penyedia_id', 'nama']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistem_el');
    }
}
