<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrasiTable extends Migration
{
    public function up()
    {
        Schema::create('administrasi', function (Blueprint $table) {
            $table->id();
            $table->string('form');
            $table->string('ktp');
            $table->string('kk'); 
            $table->string('ktp2');
            $table->integer('kode_tiket');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('administrasi');
    }
}