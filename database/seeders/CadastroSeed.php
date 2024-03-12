<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cadastro;

use Faker\Factory as Faker;

class CadastroSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 15; $i++){

            $cadastro = Cadastro::create([
                'nome' => $faker -> name,
                'sobrenome' => $faker -> name,
                'cpf' => $faker -> randomDigit,
                'email' => $faker -> name,
                'telefone' => $faker -> randomDigit,
                'cep' => $faker -> randomDigit,
                'numero' => $faker -> randomDigit,
                'rua' => $faker -> name,
                'estado' => $faker -> randomDigit,
                'nascimento' => $faker -> datetime,
                'genero' => $faker -> randomDigit,
                'etnia' => $faker -> randomDigit,
                'estado_civil' => $faker-> randomDigit,
                'certificacoes' => $faker -> name,
                'idiomas' => $faker -> randomDigit,
                'apresentacao' => $faker -> name,
                'usuario' => $faker -> userName,
                'senha' => $faker -> password,
            ]);
        }
    }
}
//