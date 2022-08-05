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
        Schema::create('penyewaan_peralatan', function (Blueprint $table) {
            $table->unsignedBigInteger('penyewaan_id');
            $table->foreign('penyewaan_id')->references('id')->on('penyewaans')->onDelete('restrict');
            $table->unsignedBigInteger('peralatan_id');
            $table->foreign('peralatan_id')->references('id')->on('peralatans')->onDelete('restrict');
            $table->string('qty')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewaan_peralatan');
    }
};
