<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaUtamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_utama', function (Blueprint $table) {
            $table->id();
            $table->uuid('asesmen_id');
            $table->foreign('asesmen_id')->references('id')->on('asesmen')
                ->onDelete('cascade');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('area')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kematangan_baru_id')->default(1);
            $table->foreign('kematangan_baru_id')->references('id')->on('kematangan_baru')
                ->onDelete('cascade');
            $table->unsignedInteger('total')->default(0);
            $table->unsignedInteger('terjawab')->default(0);
            $table->unsignedInteger('skor')->default(0);
            $table->text('pemeringkatan')->nullable();
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
        Schema::dropIfExists('area_utama');
    }
}
