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
        Schema::create('foto_umkm', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_umkm');
            $table->string('foto_umkm');
            $table->timestamps();

            $table->foreign('id_umkm')->references('id')->on('umkm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_umkm');
    }
};
