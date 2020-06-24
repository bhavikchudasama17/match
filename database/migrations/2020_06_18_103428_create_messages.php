<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sid');
            $table->unsignedBigInteger('rid');
            $table->unsignedBigInteger('iid');
            $table->string('message');
            $table->timestamps();
            $table->foreign('sid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('rid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('iid')
            ->references('id')
            ->on('intrested')
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
        Schema::dropIfExists('messages');
    }
}
