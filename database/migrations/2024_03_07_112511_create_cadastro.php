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
            $table->string('nome') ->nullable();
            $table->string('sobrenome')->nullable();
            $table->integer('cpf')->unique() ->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('telefone')->nullable();
            $table->integer('cep')->nullable();
            $table->integer('numero')->nullable();
            $table->string('rua')->nullable();
            $table->integer('estado')->nullable();
            $table->date('nascimento')->nullable();
            $table->integer('genero')->nullable();
            $table->integer('etnia')->nullable();
            $table->integer('estado_civil')->nullable();
            $table->string('certificacoes')->nullable();
            $table->integer('idiomas')->nullable(); //string
            $table->string('apresentacao')->nullable();
            $table->string('usuario')->nullable();
            $table->string('senha')->nullable();
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
