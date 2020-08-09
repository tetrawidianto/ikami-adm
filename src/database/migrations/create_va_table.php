<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('va', function (Blueprint $table) {
            $table->id();
            $table->uuid('sistem_el_id');
            $table->foreign('sistem_el_id')->references('id')->on('sistem_el')
                ->onDelete('cascade');
            $table->decimal('average_cvss_score', 2, 1);
            $table->unsignedInteger('app_security_score');
            $table->date('tanggal');
            $table->string('dok_va')->nullable();
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
        Schema::dropIfExists('va');
    }
}
