<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTerjawabBaruToAreaUtamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('area_utama', function (Blueprint $table) {
            $table->unsignedInteger('terjawab_baru')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area_utama', function (Blueprint $table) {
            $table->dropColumn('terjawab_baru');
        });
    }
}
