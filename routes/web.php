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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/escolhas', function () {
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