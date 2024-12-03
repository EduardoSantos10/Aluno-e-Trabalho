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
        Schema::create('trabalho', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tema');
            $table->text('materia');
            $table->dateTime('dataInicio');
            $table->dateTime('dataTermino');
            $table->text('nota');
            $table->timestamps(); //registra dia, mes, ano e hora
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabalho');
    }
};
