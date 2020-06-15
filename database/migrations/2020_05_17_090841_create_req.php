<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->nullable;
            $table->unsignedBigInteger('rid')->nullable;
            $table->timestamps();
            $table->foreign('uid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('rid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req');
    }
}
