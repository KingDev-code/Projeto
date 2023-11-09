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
        Schema::create('imagem', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_avaliacao');
            $table->binary('img');
            $table->timestamps();

            $table->foreign('cod_avaliacao')->references('id')->on('avaliacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagem');
    }
};
