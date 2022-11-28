<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sapi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_sapi');
            $table->string('nomor_kandang');
            $table->integer('berat_sapi_awal');
            $table->integer('berat_sapi_pertama')->nullable();
            $table->integer('berat_sapi_kedua')->nullable();
            $table->integer('berat_sapi_ketiga')->nullable();
            $table->string('tanggal');
            $table->string('pengisi');
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
        Schema::dropIfExists('sapi');
    }
};
