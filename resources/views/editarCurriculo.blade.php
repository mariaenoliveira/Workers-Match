<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('editarCurriculo.css') }}">
    <title>Edição de curriculo</title>
</head>
<body>

    <h1>Edite as informações desejadas</h1>

    <div class="geral">

        <div class="container">

            <div class="sobreMim">
                <h2>Sobre mim</h2>
        
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur,
                    distinctio molestias <br>totam voluptas magnam enim ipsum deserunt architecto
                    debitis blanditiis? <br>Enim placeat dolorem porro dicta possimus dolorum 
                    commodi est tenetur.</p>
        
                <form action="/action_page.php">
                    <label class="edicoes" for="fname">Escreva abaixo as novas informações:</label><br>
                    <input type="text" class="campo" name="fname" value=""><br>
                </form>
            </div>
    
            <div class="cursos">
                <h2>Cursos</h2>
                
                <ul>
                    <li>Inglês avançado</li>
                    <li>Técnico em Informática</li>
                    <li>Pacote Office básico</li>
                </ul>
        
                <form action="/action_page.php">
                    <label class="edicoes" for="lname">Adicione seu novo curso:</label><br>
                    <input type="text" class="campo" name="lname" value=""><br><br>
                </form>
            </div>
    
            <div class="contatos">
                <h2>Contatos</h2>
                
                <ul>
                    <li>E-mail: teste@gmail.com</li>
                    <li>Telefone Fixo: (11) 4002-8922</li>
                    <li>Telefone Celular: (11) 9 1234-5678</li>
                </ul>
        
                <form action="/action_page.php">
                    <label class="edicoes" for="lname">Adicione um novo contato:</label><br>
                    <input type="text" class="campo" name="lname" value=""><br><br>
                </form>   
            </div>
    
        </div>
    
        <div class="container2">
    
            <div class="formacoes">
                <h2>Formações</h2>
                
                <ul>
                    <li>Ensino Médio completo</li>
                    <li>Graduação em ADS</li>
                </ul>
        
                <form action="/action_page.php">
                    <label class="edicoes" for="lname">Adicione sua nova formação:</label><br>
                    <input type="text" class="campo" name="lname" value=""><br><br>
                </form>
            </div>
    
            <div class="experiencias">
                <h2>Experiências Anteriores</h2>
                
                <ul>
                    <li>Jovem Aprendiz administrativo na empresa Bradesco</li>
                    <li>Estágio back-end na empresa Porto</li>
                </ul>
        
                <form action="/action_page.php">
                    <label class="edicoes" for="lname">Adicione sua nova experiência:</label><br>
                    <input type="text" class="campo" name="lname" value=""><br><br>
                </form>
            </div>
    
        </div>

    </div>

    <div class="botao">
        <button class="button"><a href="/perfilUsuario">Salvar</button></a>
    </div>
    

</body>
</html>