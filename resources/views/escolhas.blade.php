<!-- FEITO POR: MARIA EDUARDA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="escolhas.css">
    <title>Workers Match</title>
</head>
<body>

<h1 id="titulo">Escolha as especificações desejadas</h1>
    <p id="frase">Para melhor conhecê-lo!</p>
    
    <div class="container">
    
        <h3 class="nome">Áreas</h3>
        <div class="escolhas">
            <label class="escolha">
                <input type="checkbox">
                Front-end
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Back-end
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Full-Stack
            </label>
    
    
    
        </div>
    
        <h3 class="nome">Períodos</h3>
        <div class="escolhas">
    
            <label class="escolha">
                <input type="checkbox">
                Meio período
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Integral
            </label>
        </div>
    
        <h3 class="nome">Tipo de vaga</h3>
        <div class="escolhas">
    
            <label class="escolha">
                <input type="checkbox">
                Estágio
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Junior
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Pleno
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Senior
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                freelancer
            </label>
        </div>
    
        <h3 class="nome">Modos de trabalho</h3>
        <div class="escolhas">
            <label class="escolha">
                <input type="checkbox">
                Presencial
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Híbrido
            </label>
    
            <label class="escolha">
                <input type="checkbox">
                Remoto
            </label>
    
    
        </div>
    
    
        <div class="botao">
            <!-- encaminhamento para pagina de vagas -->
            <a href="vagasDisponiveis.blade.php">Pagina de vagas
                <input class="enviar" type="button" value="Buscar">
            </a>
            
    
        </div>
    
    </div>
    
       
   

</body>
</html>