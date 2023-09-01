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
            /** 
            * $table->string('cod_estilo');
            * $table->string('cod_tipocorporal');
            * $table->string('cod_ocasiao');
            * $table->string('cod_genero');
            */
            $table->string('nome');
            $table->string('link');
            $table->string('img');
            $table->string('oca_esp');
            $table->timestamps();
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
