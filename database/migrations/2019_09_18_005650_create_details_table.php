<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('peminjamen_id');
            $table->foreign('peminjamen_id')->references('id')->on('peminjamen')->onDelete('cascade');
            $table->unsignedbigInteger('id_buku');
            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('cascade');
            $table->date('detail_tgl_kembali');
            $table->unsignedbigInteger('detail_denda');
            $table->string('detail_status_kembali');
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
        Schema::dropIfExists('details');
    }
}
