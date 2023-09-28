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
        Schema::create('pecas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cod_comb");
            $table->string('desc_peca', 100);
            $table->string('preco_peca', 10);
            $table->string('img_peca');
            $table->string("link_peca");
            $table->timestamps();

            $table->foreign('cod_comb')
            ->references('id')
            ->on('combinacaos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pecas');
    }
};
