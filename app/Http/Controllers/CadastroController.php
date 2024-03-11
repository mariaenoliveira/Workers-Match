<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

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

        $user = new User();
        $user-> nome = $validatedData['nome'];
        $user-> sobrenome = $validatedData['sobrenome'];
        $user-> cpf = $validatedData['cpf'];
        $user-> email = $validatedData['email'];
        $user-> telefone = $validatedData['telefone'];
        $user-> cep = $validatedData['cep'];
        $user-> numero = $validatedData['numero'];
        $user-> rua = $validatedData['rua'];
        $user-> estado = $validatedData['estado'];
        $user-> nascimento = $validatedData['nascimento'];
        $user-> genero = $validatedData['genero'];
        $user-> etnia = $validatedData['etnia'];
        $user-> estado_civil = $validatedData['estado_civil'];
        $user-> certificacoes = $validatedData['certificacoes'];
        $user-> idiomas = $validatedData['idiomas'];
        $user-> apresentacao = $validatedData['apresentacao'];
        $user-> usuario = $validatedData['usuario'];
        $user-> senha = bcrypt($validatedData['senha']);
        $user-> save();




        return redirect('/inicial')->with('success', 'Usuário criado com sucesso!');
    }




}
