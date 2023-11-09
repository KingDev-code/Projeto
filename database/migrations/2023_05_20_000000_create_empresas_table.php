<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_login');
            $table->binary('img_empresa')->nullable();
            $table->string('nome_empresa', 15);
            $table->string('nome_respons', 50);
            $table->string('sobrenome_respons', 80);
            $table->string('cnpj', 20);
            $table->string('telefone', 15);
            $table->timestamps();

            $table->foreign('cod_login')->references('id')->on('login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};
