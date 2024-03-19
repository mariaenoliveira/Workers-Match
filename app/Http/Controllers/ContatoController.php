<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class ContatoController extends Controller
{
    public function index1(){

        return view ('inicial/contato');
    }


    public function store1(Request $request){
        $contato = new Contato();

        $contato-> nome = $request['nome'];
        $contato-> sobrenome = $request['sobrenome'];
        $contato-> email = $request['email'];
        $contato-> telefone = $request['telefone'];
        $contato-> empresa = $request['empresa'];
        $contato-> contato = $request['contato'];

        $contato-> save();

        return redirect('inicial');
    }
    
}
