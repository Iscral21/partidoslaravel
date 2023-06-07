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
        Schema::create('t_dtto_feds', function (Blueprint $table) {
            $table->id();
            $table->string('dtto_fed');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('t_estados'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_dtto_feds');
    }
};
