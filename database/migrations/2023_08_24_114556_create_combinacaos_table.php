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
        Schema::create('combinacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_estilo');
            $table->unsignedBigInteger('cod_tipocorporal');
            $table->unsignedBigInteger('cod_ocasiao');
            $table->string('img_comb');
            $table->string('link_comb');
            $table->string('oca_esp');
            $table->timestamps();

            // Chaves estrangeiras
            $table->foreign('cod_estilo')->references('id')->on('estilos');
            $table->foreign('cod_tipocorporal')->references('id')->on('tiposcorporal');
            $table->foreign('cod_ocasiao')->references('id')->on('ocasioes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combinacaos');
    }
};