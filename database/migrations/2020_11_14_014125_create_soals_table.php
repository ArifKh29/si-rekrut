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
            $table->unsignedInteger('detail_soal_id');
            $table->foreign('detail_soal_id')->references('detail_soal_id')->on('detail_soals')->onDelete('cascade');
            $table->string('soal_nama');
            $table->string('soal_kondisi');
            $table->unsignedInteger('hrd_id');
            $table->foreign('hrd_id')->references('hrd_id')->on('hrds')->onDelete('cascade');
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
