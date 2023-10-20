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
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('combinacao_id');
            $table->timestamps();

            $table->unique(['user_id', 'combinacao_id']);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('combinacao_id')->references('id')->on('combinacoes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('favoritos');
    }
};
