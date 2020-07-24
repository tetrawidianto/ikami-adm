<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenDaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_da', function (Blueprint $table) {
            $table->id();
            $table->uuid('asesmen_id');
            $table->foreign('asesmen_id')->references('id')->on('asesmen')
                ->onDelete('cascade');
            $table->string('judul_dokumen');
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
        Schema::dropIfExists('dokumen_da');
    }
}
