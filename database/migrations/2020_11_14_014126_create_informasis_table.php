<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasis', function (Blueprint $table) {
            $table->increments('informasi_id');
            $table->date('informasi_tanggal');
            $table->string('informasi_judul');
            $table->string('informasi_isi');
            $table->string('informasi_jenis');
            $table->unsignedInteger('hrd_id');
            $table->foreign('hrd_id')->references('hrd_id')->on('hrds')->onDelete('cascade');
            $table->unsignedInteger('pelamar_id');
            $table->foreign('pelamar_id')->references('pelamar_id')->on('pelamars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasis');
    }
}
