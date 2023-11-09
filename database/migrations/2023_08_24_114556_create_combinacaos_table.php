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
        Schema::create('combinacao', function (Blueprint $table) {
            $table->id('cod_combinacao');
            $table->unsignedBigInteger('cod_estilo');
            $table->unsignedBigInteger('cod_tipocorporal');
            $table->unsignedBigInteger('cod_ocasiao');
            $table->unsignedBigInteger('cod_login');
            $table->unsignedBigInteger('cod_genero');
            $table->binary('img_comb');
            $table->string('link_comb', 2083)->nullable();
            $table->string('ocasiaoespecif_comb', 100)->nullable();
            $table->timestamps();

            $table->foreign('cod_estilo')->references('id')->on('estilo');
            $table->foreign('cod_tipocorporal')->references('id')->on('tipocorporal');
            $table->foreign('cod_ocasiao')->references('id')->on('ocasiao');
            $table->foreign('cod_login')->references('id')->on('login');
            $table->foreign('cod_genero')->references('id')->on('genero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combinacao');
    }
};