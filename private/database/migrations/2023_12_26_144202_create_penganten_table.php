<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penganten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salam');
            $table->string('tanggal');
            $table->string('title');
            $table->string('nama1');
            $table->string('keterangan1');
            $table->string('gambar1');
            $table->string('nama2');
            $table->string('keterangan2');
            $table->string('gambar2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_penganten');
    }
}
