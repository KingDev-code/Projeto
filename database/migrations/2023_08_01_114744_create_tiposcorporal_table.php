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
        Schema::create('tiposcorporal', function (Blueprint $table) {
            $table->id();
            $table->string('tipocorporal', 80);
            $table->string('icone', 100)->nullable();
            $table->boolean('ativo')->default(true); // Adicione um campo 'ativo' padrão como verdadeiro (ativo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiposcorporal');
    }
};
