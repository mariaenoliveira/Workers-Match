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
        $cadastro-> email = $request['email'];
        $cadastro-> telefone = $request['telefone'];
        /* $cadastro-> cep = $request['cep'];
        $cadastro-> bairro = $request['bairro'];
        $cadastro-> complemento = $request['complemento'];
        $cadastro-> numero = $request['numero'];
        $cadastro-> rua = $request['rua'];
        $cadastro-> estado = $request['estado'];
        $cadastro-> cidade = $request['cidade'];
        $cadastro-> genero = $request['genero'];
        $cadastro-> senha = bcrypt($request['senha']);*/
        $cadastro-> save();

        return $request['nome'];

        //return redirect('/inicial')->with('success', 'Usuário criado com sucesso!');
    }

    public function store2(Request $request)
    {

        $cadastro = new Cadastro();
        $cadastro-> nome = $request['nome'];
        $cadastro-> sobrenome = $request['sobrenome'];
        $cadastro-> email = $request['email'];
        $cadastro-> telefone = $request['telefone'];
        $cadastro-> senha = bcrypt($request['senha']);
        $cadastro-> genero = $request['genero'];
        $cadastro-> estado = $request['estado'];
        $cadastro-> cidade = $request['cidade'];
        $cadastro-> cep = $request['cep'];
        $cadastro-> bairro = $request['bairro'];
        $cadastro-> rua = $request['rua'];
        $cadastro-> numero = $request['numero'];
        $cadastro-> complemento = $request['complemento'];

        $cadastro-> save();

        return redirect('inicial');
    }




}
