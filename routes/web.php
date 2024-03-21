<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\LoginController;

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

Route::get('/cadastro', function (){
    return view('cadastro');
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

Route::get('/inicial/TermosECondicoes', function(){
    return view('termosECond');
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

Route::get('/inicial/login', function(){
    return view('login');
});

Route::get('/regrasdacomunidade/regrasComunidade', function(){
    return view('regrasComunidade');
});

Route::get('/dicasdeseguranca/dicasDeSeguranca', function(){
    return view('dicasdeseguranca');
});

Route::get('/segurancaDenuncia/segurancaDenuncia', function(){
    return view('segurancaDenuncia');
});

Route::get('/inicial/patrocinadores', function(){
    return view('patrocinadores');
});

Route::get('/wm', function(){
    return view('wm');
});

Route::get('/inicial/login', function(){
    return view('login');
});

Route::get('/cadastro', [CadastroController::class, 'index']);

Route::post('/cadastro2', [CadastroController::class, 'store2']);

Route::get('/contato', [ContatoController::class, 'index1']);

Route::post('/contato', [ContatoController::class, 'store1']);

Route::get('/curriculo', [CurriculoController::class, 'index3']);

Route::post('/curriculo', [CurriculoController::class, 'store3']);

Route::get('/login', [LoginController::class, 'index4']);

Route::post('/login', [LoginController::class, 'cadastroWeb']);
