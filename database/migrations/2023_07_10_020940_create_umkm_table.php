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
        Schema::create('umkm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_thumbnail');
            $table->string('nama_umkm', 50);
            $table->string('nama_pemilik', 50);
            $table->string('alamat_usaha', 100);
            $table->string('no_hp', 20);
            $table->string('deskripsi_usaha', 255);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
