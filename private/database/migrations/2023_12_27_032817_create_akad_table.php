<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_akad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jam1');
            $table->string('jam2');
            $table->string('tanggal1');
            $table->string('tanggal2');
            $table->string('keterangan');
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
        Schema::dropIfExists('table_akad');
    }
}
