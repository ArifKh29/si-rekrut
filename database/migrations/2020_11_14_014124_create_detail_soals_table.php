<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_soals', function (Blueprint $table) {
            $table->increments('detail_soal_id');
            $table->string('soal_pertanyaan');
            $table->string('pilih_a');
            $table->string('pilih_b');
            $table->string('pilih_c');
            $table->string('pilih_d');
            $table->string('kunci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_soals');
    }
}
