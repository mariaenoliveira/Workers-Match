<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('perfil.css') }}">
    <title>Perfil do usuário</title>
</head>
<body>
 
    <section class="home">
 
        <div class="home-img">
            <img src="/image/workers.png" alt="" id="foto">
        </div>
   
        <div class="home-content">
            <h1>Nome do Usuário</h1>
            <p>Bem-Vindo ao seu perfil pessoal!</p>
        </div>
 
    </section>
 
 
    <h2 class="pre-curriculo">Minhas Informações</h2>
 
 
    <div class="container">
 
        <div class="sobre">
            <h2>Sobre Mim</h2>
            <p>{{ $usuario->sobre }}</p>
        </div>
           
        <hr>
       
        <div class="cursos">
            <h2>Cursos</h2>
            <p>{{ usuario->cursos }}</p>
        </div>
           
        <hr>
       
        <div class="formacoes">
            <h2>Formações</h2>
            <p>{{ usuario->formacoes }}</p>
        </div>
 
        <hr>
       
        <div class="experiencia">
            <h2>Experiências anteriores</h2>
            <p>{{ usuario->experiencias }}</p>
        </div>
       
        <hr>
   
        <div class="contatos">
            <h2>Contatos</h2>
            <ul>
                <li>{{ usuario->telefone }}</li>
                <li>{{ usuario->email }}</li>
                <li>{{ usuario->redes }}</li>
            </ul>
        </div>

        <hr>
 
    </div>

    <button class="botao"><a href="/perfilUsuario/editarCurriculo">Editar Currículo</a></button>
    <button class="botao"><a href="/perfilUsuario/MinhasVagas">Minhas Vagas</a></button>
       
     
   
</body>
</html>