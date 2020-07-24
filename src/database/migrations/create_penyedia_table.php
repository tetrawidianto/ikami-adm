<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyedia', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('nama_panjang');
            $table->text('alamat');
            $table->string('website');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->unsignedBigInteger('inisiator_id');
            $table->string('inisiator_type');
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
        Schema::dropIfExists('penyedia');
    }
}
