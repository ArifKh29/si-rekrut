<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->increments('pelamar_id');
            $table->string('pelamar_nama', 30);
            $table->string('pelamar_tempat_lahir', 15);
            $table->date('pelamar_tanggal_lahir');
            $table->string('pelamar_alamat', 50);
            $table->enum('pelamar_jenis_kelamin', ['L','P']);
            $table->string('pelamar_agama', 15);
            $table->string('pelamar_status', 15);
            $table->string('pelamar_email')->unique();
            $table->string('pelamar_foto');
            $table->string('pelamar_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamars');
    }
}
