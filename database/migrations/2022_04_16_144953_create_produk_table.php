<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('produk_id');
            $table->string('nama_produk')->nullable();
            $table->string('stok')->nullable();
            $table->string('kategori')->nullable();
            $table->string('harga')->nullable();
            $table->string('berat_produk')->nullable();
            $table->string('masa_penyimpanan')->nullable();
            $table->date('tanggal_kadaluwarsa')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('produk');
    }
}
