<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveDokumenTerkaitFromAsesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asesmen', function (Blueprint $table) {
            $table->dropColumn('dokumen_terkait');
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
            $table->text('dokumen_terkait')->nullable();
        });
    }
}
