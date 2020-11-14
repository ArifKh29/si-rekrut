<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->increments('soal_id');
            $table->unsignedBigInteger('detail_soal_id');
            $table->foreign('detail_soal_id')->references('id')->on('detail_soals')->onDelete('cascade');
            $table->string('soal_nama');
            $table->string('soal_kondisi');
            $table->unsignedBigInteger('hrd_id');
            $table->foreign('hrd_id')->references('id')->on('hrds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soals');
    }
}
