<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. Raissa
     */
    public function up(): void
    {
        Schema::create('cadastro', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->integer('cpf')->unique();
            $table->string('email')->unique();
            $table->integer('telefone');
            $table->integer('cep');
            $table->integer('numero');
            $table->string('rua');
            $table->integer('estado');
            $table->date('nascimento');
            $table->integer('genero');
            $table->integer('etnia');
            $table->integer('estado_civil');
            $table->string('certificacoes');
            $table->integer('idiomas');
            $table->string('apresentacao');
            $table->string('usuario');
            $table->string('senha');
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
