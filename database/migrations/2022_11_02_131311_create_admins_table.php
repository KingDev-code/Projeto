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
        Schema::create('administradores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('login_id');
            $table->string('img_admin', 100)->nullable();
            $table->string('nome_admin', 50);
            $table->string('sobrenome_admin', 80);
            $table->string('cpf_admin', 20);
            $table->string('telefone', 15);
            $table->date('dtanasc_admin');
            $table->date('dtaadmissao_admin');
            $table->timestamps();

            // Adicione um índice único na coluna 'login_id' para otimizar consultas por login_id
            $table->unique('login_id');

            // Adicione um índice único na coluna 'cpf_admin' se você consulta administradores por CPF
            $table->unique('cpf_admin');

            // Adicione um relacionamento com a tabela 'logins'
            $table->foreign('login_id')->references('id')->on('logins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
