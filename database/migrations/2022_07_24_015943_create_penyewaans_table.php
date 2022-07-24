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
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->foreignId('user_id');
            $table->foreignId('lapangan_id');
            $table->foreignId('paket_id');
            $table->date('tgl_main');
            $table->string('waktu_main');
            $table->string('metode')->nullable();
            $table->string('tipe')->nullable();
            $table->string('bukti')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('tgl_sewa')->nullable();
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
        Schema::dropIfExists('penyewaans');
    }
};
