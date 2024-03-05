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
        Schema::create('cadastro', function (Blueprint $table) {
            $table->id('');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('usuario')->unique();
            $table->int('cpf')->unique();
            $table->string('email')->unique();
            $table->int('telefone')->unique();
            $table->int('cep');
            $table->int('numero');
            $table->int('etnia');
            $table->int('estadocivil');
            $table->int('genero');
            $table->string('certificações');
            $table->int('idioma');
            $table->string('cartadeapresentacao');
            $table->//escolher estado

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro');
    }
};
