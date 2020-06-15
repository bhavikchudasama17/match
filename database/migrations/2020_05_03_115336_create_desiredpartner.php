<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesiredpartner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desiredpartner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->nullable;
            $table->string('age');
            $table->string('height');
            $table->string('maritalstatus');
            $table->string('religion');
            $table->string('caste');
            $table->string('education');
            $table->string('occupation');
            $table->string('income');
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
        Schema::dropIfExists('desiredpartner');
    }
}
