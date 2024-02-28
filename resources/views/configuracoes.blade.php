<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/ef7b1eb764.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('configuracoes.css')}}">
</head>
<body>

<div class="topo">
        <h1>*************************</h1>
</div>

<h1><i class="fa-solid fa-gear"></i>Configurações</h1>

<div class="opcoes">

    <hr>
    <a class="linha" href="/editarPerfil"><i class="fa-solid fa-pen-to-square"></i>Editar Perfil</a>
    <hr>

    <a class="linha" href=""><i class="fa-solid fa-lock"></i>Alterar Senha</a>
    <hr>

    <a class="linha" href="/perfilUsuario/editarCurriculo"><i class="fa-solid fa-scroll"></i>Editar Currículo</a>
    <hr>

    <a class="linha" href=""><i class="fa-solid fa-question"></i>Ajuda e Suporte</a>
    <hr>

    <a class="linha" href=""><i class="fa-solid fa-shuffle"></i>Alterar Preferências</a>
    <hr>

    <a class="linha" href=""><i class="fa-solid fa-trash"></i>Excluir Conta</a>
    <hr>

    <a class="linha" href=""><i class="fa-solid fa-xmark"></i>Sair</a>
    <hr>

</div>
    
</body>
</html>