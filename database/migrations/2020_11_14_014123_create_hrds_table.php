<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hrds', function (Blueprint $table) {
            $table->increments('hrd_id');
            $table->string('hrd_nama', 30);
            $table->string('hrd_tempat_lahir', 15);
            $table->date('hrd_tanggal_lahir');
            $table->string('hrd_alamat', 50);
            $table->enum('hrd_jenis_kelamin', ['L','P']);
            $table->string('hrd_agama', 15);
            $table->string('hrd_status', 15);
            $table->string('hrd_email')->unique();
            $table->string('hrd_foto');
            $table->string('hrd_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hrds');
    }
}
