<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspekSuplemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspek_suplemen', function (Blueprint $table) {
            $table->id();
            $table->uuid('asesmen_id');
            $table->foreign('asesmen_id')->references('id')->on('asesmen')
                ->onDelete('cascade');
            $table->unsignedBigInteger('aspek_id');
            $table->foreign('aspek_id')->references('id')->on('aspek')
                ->onDelete('cascade');
            $table->unsignedInteger('total')->default(0);
            $table->unsignedInteger('terjawab')->default(0);
            $table->unsignedInteger('terjawab_baru')->default(0);
            $table->unsignedInteger('skor')->default(0);
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
        Schema::dropIfExists('aspek_suplemen');
    }
}
