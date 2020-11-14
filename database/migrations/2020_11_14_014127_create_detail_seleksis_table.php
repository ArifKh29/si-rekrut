<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSeleksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_seleksis', function (Blueprint $table) {
            $table->increments('detail_seleksi_id');
            $table->string('seleksi_pertanyaan');
            $table->integer('seleksi_nilai');
            $table->string('seleksi_jawaban');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_seleksis');
    }
}
