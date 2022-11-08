<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attvalues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attnames_id');
        
            $table->foreign('attnames_id')->references('id')->on('attnames');
            $table->string('att_value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attvalues');
    }
};
