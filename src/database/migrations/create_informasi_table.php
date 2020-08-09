<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();

            $table->uuid('asesmen_id');
            $table->foreign('asesmen_id')->references('id')->on('asesmen')
                ->onDelete('cascade');

            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('area')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('aspek_id')->nullable();
            $table->foreign('aspek_id')->references('id')->on('aspek')
                    ->onDelete('cascade');
            
            $table->unsignedBigInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('jawaban_1');
            $table->foreign('jawaban_1')->references('id')->on('jawaban')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('jawaban_2')->nullable();
            $table->foreign('jawaban_2')->references('id')->on('jawaban')
                ->onDelete('cascade');

            $table->text('catatan')->nullable();

            $table->boolean('confirm')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->timestamps();
            $table->unique(['asesmen_id', 'pertanyaan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi');
    }
}
