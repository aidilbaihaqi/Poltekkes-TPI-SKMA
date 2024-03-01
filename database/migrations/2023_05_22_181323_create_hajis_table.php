<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hajis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_paket');
            $table->string('nama_paket');
            $table->string('jenis_paket');
            $table->string('hotel_mekkah');
            $table->string('hotel_madinah');
            $table->string('arafah');
            $table->string('aziziyah');
            $table->string('mabit');;
            $table->integer('program_hari');
            $table->string('bandara_keberangkatan');
            $table->date('keberangkatan');
            $table->string('tahun_keberangkatan');
            $table->string('kamar');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajis');
    }
};
