<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index4(){
        return view('login');
    }

    public function validaUsuario (request $dadosLogin){

        $credenciais = $dadosLogin->only('email','senha');

        if(Auth::attempt($credenciais)){
            return redirect() ->intended("/wm");

        }else{
            return back()->with("error", "Usuário ou senha incorretos");
        }

        return "Veja se está correto";
    }


}
