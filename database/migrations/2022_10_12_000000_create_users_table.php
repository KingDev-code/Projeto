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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('login_id');
            $table->string('name');
            $table->string('sobrenome');
            $table->date('datanasc');
            $table->string('img_cliente')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Adicione um índice à coluna 'login_id' para otimizar consultas de relacionamento
            $table->index('login_id');

            $table->foreign('login_id')->references('id')->on('logins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
