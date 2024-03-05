<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('montarCurriculo.css') }}">
    <title>Montar currículo</title>
</head>
<body>
 
    <h1>Preencha abaixo seu currículo</h1>
    <p>Não esqueça de especificar cada informação adicionada!</p>
 
    <h2>Sobre Mim</h2>
    <textarea name="" id="caixa" cols="50" rows="15"></textarea>

    
 
    <h2>Cursos</h2>
    <button onclick="adicionarCopia()">Adicionar Curso</button>
    <div class="card">
        <input class="adicionar" type="text">
        <button class="botao" onclick="apagarElemento()">Remover curso</button>
    </div>
 
    

    <h2>Formações</h2>
    <button onclick="adicionarCopia()">Adicionar Formação</button>
    <div class="card">
        <input class="adicionar" type="text">
        <button class="botao" onclick="apagarElemento()">Remover Formação</button>
    </div>
 
   

    <h2>Experiências anteriores</h2>
    <button onclick="adicionarCopia()">Adicionar Experiência</button>
    <div class="card">
        <input class="adicionar" type="text">
        <button class="botao" onclick="apagarElemento()">Remover Experiência</button>
    </div>
 
    

    <h2>Contatos</h2>
    <button onclick="adicionarCopia()">Adicionar Contato</button>
    <div class="card">
        <input class="adicionar" type="text">
        <button class="botao" onclick="apagarElemento()">Remover Contato</button>
    </div>

    <button id="salvar">Salvar</button>


    <script src="{{ asset('montarCurriculo.js') }}"></script>
   
</body>
</html>