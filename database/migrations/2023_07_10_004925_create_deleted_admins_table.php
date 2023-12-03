<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeletedAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('deleted_admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('deleted_admins');
    }
}
