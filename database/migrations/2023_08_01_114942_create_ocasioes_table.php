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
        Schema::create('ocasiao', function (Blueprint $table) {
            $table->id('cod_ocasiao');
            $table->string('ocasiao', 80);
            $table->boolean('ativo')->default(true)->nullable(); // Adicione um campo 'ativo' padrão como verdadeiro (ativo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocasiao');
    }
};
