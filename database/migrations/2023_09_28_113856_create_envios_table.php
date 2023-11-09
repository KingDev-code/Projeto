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
        Schema::create('envio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_empresa');
            $table->unsignedBigInteger('cod_combinacao');
            $table->unsignedBigInteger('cod_estado');
            $table->date('dt_envio');
            $table->date('dt_edicao')->nullable();
            $table->timestamps();

            $table->foreign('cod_empresa')->references('id')->on('empresa');
            $table->foreign('cod_combinacao')->references('id')->on('combinacao');
            $table->foreign('cod_estado')->references('id')->on('estado');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envio');
    }
};
