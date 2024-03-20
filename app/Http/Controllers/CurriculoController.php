<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades;

class CurriculoController extends Controller
{
    
    public function index3(){
        return view ('montarCurriculo');
    }

    public function store3(Request $request){
        $curriculo = New Curriculo();

        $curriculo-> sobre = $request['sobre'];
        $curriculo-> cursos = $request['cursos'];
        $curriculo-> formacoes = $request['formacoes'];
        $curriculo-> experiencias = $request['experiencias'];
        $curriculo-> contatos = $request['contatos'];

        $curriculo-> save();

        return redirect('inicial');
    }
}
