<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = "cadastro";

    protected $fillable = [
        "nome",
        /*"sobrenome",
        "cpf",
        "email",
        "telfone",
        "cep",
        "numero",
        "rua",
        "estado",
        "nascimento",
        "genero",
        "etnia",
        "estado_civil",
        "certificacoes",
        "idiomas",
        "apresentacoes",
        "usuario",
        "senha",*/
    ];
}
