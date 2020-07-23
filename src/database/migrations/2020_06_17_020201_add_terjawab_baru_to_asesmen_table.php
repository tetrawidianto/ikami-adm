<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTerjawabBaruToAsesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asesmen', function (Blueprint $table) {
            $table->unsignedInteger('terjawab_baru')->default(0);
            $table->unsignedInteger('terjawab_utama_baru')->default(0);
            $table->unsignedInteger('terjawab_suplemen_baru')->default(0);
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
            $table->dropColumn('terjawab_baru');
            $table->dropColumn('terjawab_utama_baru');
            $table->dropColumn('terjawab_suplemen_baru');
        });
    }
}
