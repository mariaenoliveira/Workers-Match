<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/escolhas', function (){
    return view('escolhas');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/perfilUsuario', function (){
    return view('perfil');
});

Route::get('/vagas', function(){
    return view('vagas');
});

Route::get('/perfilUsuario/MinhasVagas', function(){
    return view('minhasvagas');
});

route::get('/inicial', function(){
    return view('inicial');
});

Route::get('/perfilUsuario/editarCurriculo', function(){
    return view('editarcurriculo');
});

Route::get('/inicial/Privacidade', function(){
    return view('privacidade');
});

Route::get('/inicial/contato', function(){
    return view('contato');
});

Route::get('/inicial/PerguntasFrequentes', function(){
    return view('perguntas');
});

Route::get('/perfilUsuario/Configuracoes', function(){
    return view('configuracoes');
});

Route::get('/editarPerfil', function(){
    return view('editarPerfil');
});

Route::get('/montarCurriculo', function(){
    return view('montarCurriculo');
});
