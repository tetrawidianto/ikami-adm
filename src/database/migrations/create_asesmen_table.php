<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesmen', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('sistem_el_id');
            $table->foreign('sistem_el_id')->references('id')->on('sistem_el')
                ->onDelete('cascade');
            $table->unsignedBigInteger('versi_id');
            $table->foreign('versi_id')->references('id')->on('versi')
                ->onDelete('cascade');
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
        Schema::dropIfExists('asesmen');
    }
}
