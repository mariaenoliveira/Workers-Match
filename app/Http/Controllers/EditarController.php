<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarController extends Controller
{
    public function perfil(){
        $usuario = auth()->user();
        return view ('perfilUsuario', compact('usuario'));
    }

    public function editar(){
        $usuario = auth()->user();
        return view('editarPerfil', compact (usuario));
    }

    public function atualizar(Request $resquest, $id){
        $usuario = Usuario::findOrFail($id);
        $usuario-> update([
            'nome' => $request->input('nome'),
            'sobrenome' => $request->input('sobrenome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'redes' => $request->input('redes'),
            'cursos' => $request->input('cursos'),
            'formacoes' => $request->input('formacoes'),
            'experiencias' => $request->input('experiencias'),
            'sobre' => $request->input('sobre'),
        ]);
        return redirect()->route(usuario.perfil)->with('success', 'Perfil atualizado com sucesso');
    }
}
