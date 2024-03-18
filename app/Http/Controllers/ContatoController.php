<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index1(){
        return view ('contato');
    }

    public function store1(Request $request){ 
        $validatedDate = $request -> validate([


            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'empresa' => 'required',
            'contato' => 'required',
        ]);

    }

    public function store1(Request $request){
        $contato = new Contato();

        $contato -> nome = $request['nome'];
    }
    
}
