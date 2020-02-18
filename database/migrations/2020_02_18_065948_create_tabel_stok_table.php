<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelStokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_stok', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('id_barang')->unsigned();
            $table->foreign('id_barang')->references('id')->on('tabel_barang');

            $table->integer('total_barang');
            $table->char('jenis_stok', 4);

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
        Schema::dropIfExists('tabel_stok');
    }
}
