<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Apps\Models\Cadastro;

class CadastroController extends Controller
{
    public function cadastro(){

        return view('cadastro');
    }

    public function store(Request $request){

        $request -> validate([

            'nome' => 'required',
            'sobrenome' => 'required',
            'cpf' => 'required',
            'email' => 'required|email|unique:usuario',
            'telefone' => 'required',
            'cep' => 'required',
            'numero' => 'required',
            'rua' => 'required',
            'estado' => 'required',
            'nascimento' => 'required',
            'genero' => 'required',
            'etnia' => 'required',
            'estado_civil' => 'required',
            'certificacoes' => 'required',
            'idiomas' => 'required',
            'apresentacao' => 'required',
            'usuario' => 'required',
            'senha' => 'required|min:6',

        ]);

        Cadastro::create([

            'nome' => request->input('nome'),
            'sobrenome' => request->input('sobrenome'),
            'cpf' => request->input('cpf'),
            'email' => request->input('email'),
            'telefone' => request->input('telefone'),
            'cep' => request->input('cep'),
            'numero' => request->input('numero'),
            'rua' => request->input('rua'),
            'estado' => request->select('estado'),
            'nascimento' => request->date('nascimento'),
            'genero' => request->select('genero'),
            'etnia' => request->select('etnia'),
            'estado_civil' => request->select('estado_civil'),
            'certificacoes' => request->text('certificacoes'),
            'idiomas' => request->checkboxs('idiomas'),
            'apresentacao' => request->text('apresentacao'),
            'usuario' => request->input('usuario'),
            'senha' => request->input('senha'),
        ]);

        return redirect()->route('cadastro')->with('success', 'Usuário criado com sucesso!');
    }




}
