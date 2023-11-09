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
        Schema::create('administrador', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_login');
            $table->binary('img_admin')->nullable();
            $table->string('nome_admin', 50);
            $table->string('sobrenome_admin', 80);
            $table->string('cpf_admin', 20);
            $table->string('telefone_admin', 15);
            $table->date('dtanasc_admin');
            $table->date('dtaadmissao_admin');
            $table->timestamps();

            $table->foreign('cod_login')->references('id')->on('login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrador');
    }
};
