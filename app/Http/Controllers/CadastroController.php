<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class CadastroController extends Controller
{
    public function index(){

        return view('cadastro');
    }

    public function store(Request $request){
        

        $validatedDate = $request -> validate([

            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf'  => 'required',
            'email'  => 'required',
            'telefone'  => 'required',
            'cep'  => 'required',
            'numero' => 'required',
            'rua'  => 'required',
            'estado'  => 'required',
            'nascimento' => 'required',
            'genero' => 'required',
            'etnia' => 'required',
            'estado_civil'  => 'required',
            'certificacoes' => 'required',
            'idiomas'  => 'required',
            'apresentacao'  => 'required',
            'usuario' => 'required',
            'senha' => 'required',

        ]);
/*
        $cadastro = new Cadastro();
        $cadastro-> nome = $validatedData['nome'];
        $cadastro-> sobrenome = $validatedData['sobrenome'];
        $cadastro-> cpf = $validatedData['cpf'];
        $cadastro-> email = $validatedData['email'];
        $cadastro-> telefone = $validatedData['telefone'];
        $cadastro-> cep = $validatedData['cep'];
        $cadastro-> numero = $validatedData['numero'];
        $cadastro-> rua = $validatedData['rua'];
        $cadastro-> estado = $validatedData['estado'];
        $cadastro-> nascimento = $validatedData['nascimento'];
        $cadastro-> genero = $validatedData['genero'];
        $cadastro-> etnia = $validatedData['etnia'];
        $cadastro-> estado_civil = $validatedData['estado_civil'];
        $cadastro-> certificacoes = $validatedData['certificacoes'];
        $cadastro-> idiomas = $validatedData['idiomas'];
        $cadastro-> apresentacao = $validatedData['apresentacao'];
        $cadastro-> usuario = $validatedData['usuario'];
        $cadastro-> senha = bcrypt($validatedData['senha']);
        $cadastro-> save();*/

        $cadastro = new Cadastro();
        $cadastro-> nome = $request['nome'];
        $cadastro-> sobrenome = $request['sobrenome'];
        $cadastro-> cpf = $request['cpf'];
        $cadastro-> email = $request['email'];
        $cadastro-> telefone = $request['telefone'];
        $cadastro-> cep = $request['cep'];
        $cadastro-> numero = $request['numero'];
        $cadastro-> rua = $request['rua'];
        $cadastro-> estado = $request['estado'];
        $cadastro-> nascimento = $request['nascimento'];
        $cadastro-> genero = $request['genero'];
        $cadastro-> etnia = $request['etnia'];
        $cadastro-> estado_civil = $request['estado_civil'];
        $cadastro-> certificacoes = $request['certificacoes'];
        $cadastro-> idiomas = $request['idiomas'];
        $cadastro-> apresentacao = $request['apresentacao'];
        $cadastro-> usuario = $request['usuario'];
        $cadastro-> senha = bcrypt($request['senha']);
        $cadastro-> save();

        return redirect('/inicial')->with('success', 'Usuário criado com sucesso!');
    }




}
