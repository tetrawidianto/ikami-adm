<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeployToAsesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asesmen', function (Blueprint $table) {
            $table->unsignedInteger('total')->default(0);
            $table->unsignedInteger('terjawab')->default(0);
            $table->unsignedInteger('skor')->default(10);
            $table->unsignedBigInteger('kategori_sistem_el_id')->default(1);
            $table->foreign('kategori_sistem_el_id')->references('id')->on('kategori_sistem_el')
                ->onDelete('cascade');
            $table->unsignedInteger('total_utama')->default(0);
            $table->unsignedInteger('terjawab_utama')->default(0);
            $table->unsignedInteger('skor_utama')->default(0);
            $table->unsignedBigInteger('opini_id')->nullable();
            $table->foreign('opini_id')->references('id')->on('opini')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asesmen', function (Blueprint $table) {
            $table->dropColumn('total');
            $table->dropColumn('terjawab');
            $table->dropColumn('skor');
            $table->dropForeign(['kategori_sistem_el_id']);
            $table->dropColumn('kategori_sistem_el_id');
            $table->dropColumn('total_utama');
            $table->dropColumn('terjawab_utama');
            $table->dropColumn('skor_utama');
            $table->dropForeign(['opini_id']);
            $table->dropColumn('opini_id');
        });
    }
}
