<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seleksis', function (Blueprint $table) {
            $table->increments('seleksi_id');
            $table->date('seleksi_tanggal');
            $table->unsignedInteger('pelamar_id');
            $table->foreign('pelamar_id')->references('pelamar_id')->on('pelamars')->onDelete('cascade');
            $table->unsignedInteger('soal_id');
            $table->foreign('soal_id')->references('soal_id')->on('soals')->onDelete('cascade');
            $table->unsignedInteger('detail_seleksi_id');
            $table->foreign('detail_seleksi_id')->references('detail_seleksi_id')->on('detail_seleksis')->onDelete('cascade');
            $table->integer('seleksi_total_nilai');
            $table->unsignedInteger('informasi_id');
            $table->foreign('informasi_id')->references('informasi_id')->on('informasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seleksis');
    }
}
