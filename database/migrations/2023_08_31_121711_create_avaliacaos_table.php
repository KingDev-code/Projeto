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
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_login');
            $table->integer('num_estrelas');
            $table->text('desc_avaliacao')->nullable();
            $table->date('dta_publicacao');
            $table->date('dta_edicao')->nullable();
            $table->timestamps();

            $table->foreign('cod_login')->references('id')->on('login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacao');
    }
};
