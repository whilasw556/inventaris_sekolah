<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('peminjam');
            $table->string('jk');
            $table->string('no_telp');
            $table->bigInteger('id_barang')->unsigned();
            // fk barang
            $table->foreign('id_barang')->references('id')
            ->on('barangs')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('jumlah');
            $table->date('tgl_pinjam');
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
        Schema::dropIfExists('peminjamen');
    }
}
