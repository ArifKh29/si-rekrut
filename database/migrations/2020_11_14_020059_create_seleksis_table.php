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
            $table->unsignedBigInteger('pelamar_id');
            $table->foreign('pelamars_id')->references('id')->on('pelamars')->onDelete('cascade');
            $table->unsignedBigInteger('soal_id');
            $table->foreign('soal_id')->references('id')->on('soals')->onDelete('cascade');
            $table->unsignedBigInteger('detail_seleksi_id');
            $table->foreign('detail_seleksi_id')->references('id')->on('detail_seleksis')->onDelete('cascade');
            $table->integer('seleksi_total_nilai');
            $table->unsignedBigInteger('informasi_id');
            $table->foreign('informasi_id')->references('id')->on('informasis')->onDelete('cascade');
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
