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

    
 
    <section id="cursos">
        <h2>Cursos</h2>
        <button data-group="cursos" class="button">Adicionar Curso</button>
        <div class="entry">
            <input class="adicionar" type="text">
            <!-- <button class="botao" onclick="apagarCurso()">Remover curso</button> -->
        </div>

        <div hidden>
            <div class="entry entry-model">
                <input type="text" id="adicionar" placeholder="ZZZZZ">
                <button class="botao" onclick="apagarCurso()">Remover curso</button>
            </div>
        </div>
    </section>



    
    <section id="formacoes">
        <h2>Formações</h2>
        <button data-group="formacoes" class="button">Adicionar Formação</button>
        <div class="entry">
            <input class="adicionar" type="text">
            <!-- <button class="botao" onclick="apagarFormacao()">Remover Formação</button> -->
        </div>

        <div hidden>
            <div class="entry entry-model">
                <input type="text" id="adicionar" placeholder="ZZZZZ">
                <button class="botao" onclick="apagarFormacao()">Remover Formação</button>
            </div>
        </div>
    </section>
    
    
    <section id="experiencias">
        <h2>Experiências anteriores</h2>
        <button data-group="experiencias" class="button">Adicionar Experiência</button>
        <div class="entry">
            <input class="adicionar" type="text">
            <button class="botao" onclick="apagarExperiencia()">Remover Experiência</button>
        </div>
    </section>

    
    <section id="contatos">
        <h2>Contatos</h2>
        <button data-group="contatos" class="button">Adicionar Contato</button>
        <div class="entry">
            <input class="adicionar" type="text">
            <button class="botao" onclick="apagarContato()">Remover Contato</button>
        </div>
    </section>



    <div hidden>
        <div class="entry entry-model">
            <input type="text" id="adicionar" placeholder="ZZZZZ">
        </div>
    </div>
    

    

    <button id="salvar">Salvar</button>



    <script src="{{ asset('montarCurriculo.js') }}"></script>
   
</body>
</html>