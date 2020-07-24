<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeringkatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeringkatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kematangan_baru_id');
            $table->foreign('kematangan_baru_id')->references('id')->on('kematangan_baru')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kematangan_id');
            $table->foreign('kematangan_id')->references('id')->on('kematangan')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kesiapan_id');
            $table->foreign('kesiapan_id')->references('id')->on('kesiapan')
                ->onDelete('cascade');
            $table->text('jawaban');
            $table->decimal('proporsi', 2, 1);
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
        Schema::dropIfExists('pemeringkatan');
    }
}
