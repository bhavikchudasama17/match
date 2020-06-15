<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntrested extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intrested', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->nullable;
            $table->unsignedBigInteger('iid')->nullable;
            $table->timestamps();
            $table->foreign('uid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('iid')
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
        Schema::dropIfExists('intrested');
    }
}
