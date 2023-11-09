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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_login');
            $table->binary('img_cliente')->nullable();
            $table->string('nome_cliente', 50);
            $table->string('sobrenome_cliente', 80);
            $table->date('dtanasc_cliente');
            $table->timestamps();

            $table->foreign('cod_login')->references('id')->on('login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
