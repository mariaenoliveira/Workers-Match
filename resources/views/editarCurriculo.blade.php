<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('editarCurriculo.css') }}">
    <title>Edite seu currículo</title>
</head>
<body>
    <h1>Edite seu currículo</h1>
    

    <section class="edite">
        <h4>Adicione suas novas informações!</h4>

        <div class="container">

            <div class="box">
                <div class="info">
                    <h3>Cursos</h3>
                    <input type="text">
                </div>   
            </div>

            <div class="box">
                <div class="info">
                    <h3>Formações</h3>
                    <input type="text">
                </div>   
            </div>

            <div class="box">
                <div class="info">
                    <h3>Experiências anteriores</h3>
                    <input type="text">
                </div>   
            </div>

        </div>

        <div class="importantes">

            <div class="contato">
                <h3 class="maiores"><span>Adicione</span> um novo contato</h3>
                <input type="text" placeholder="Novo contato" id="input" required>
            </div>
    
            <div class="sobre">
                <h3 class="maiores"><span>Adicione</span> novas informações sobre você</h3>
                <textarea name="" id="" cols="30" rows="10" placeholder="" required></textarea>
            </div>
            
        </div>
        

    </section>

    
    

    <button>Salvar</button>

</body>
</html>