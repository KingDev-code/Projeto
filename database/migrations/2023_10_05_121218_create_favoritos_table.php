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
        Schema::create('favorito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_login');
            $table->unsignedBigInteger('cod_combinacao');
            $table->timestamps();

            $table->foreign('cod_login')->references('id')->on('login');
            $table->foreign('cod_combinacao')->references('id')->on('combinacao');
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorito');
    }
};
