<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLifestyle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lifestyle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->nullable;
            $table->string('appearance');
            $table->string('weight');
            $table->string('assets');
            $table->string('habbits');
            $table->string('languageknown');
            $table->string('bloodgroup');
            $table->string('stay');
            $table->timestamps();
            $table->foreign('uid')
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
        Schema::dropIfExists('lifestyle');
    }
}
