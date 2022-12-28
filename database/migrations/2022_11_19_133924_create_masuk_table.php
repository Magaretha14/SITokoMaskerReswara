<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang_masuk');
            $table->string('jumlah_barang_masuk');
            $table->string('harga_barang');
            $table->string('total_harga_barang');
            $table->string('tanggal_barang_masuk');
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
        Schema::dropIfExists('masuk');
    }
}
