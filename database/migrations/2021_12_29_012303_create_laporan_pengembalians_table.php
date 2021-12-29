<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPengembaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_pengembalians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_peminjaman')->unsigned();
            // fk barang
            $table->foreign('id_peminjaman')->references('id')
            ->on('peminjamen')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('status');
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
        Schema::dropIfExists('laporan_pengembalians');
    }
}
