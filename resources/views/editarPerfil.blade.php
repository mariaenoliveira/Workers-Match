<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
 
    <link rel="stylesheet" href="editarPerfil.css">
    <script src="https://kit.fontawesome.com/ef7b1eb764.js" crossorigin="anonymous"></script>
</head>
<body>
 
    <form action={{ route(usuario.atualizar, $usuario->id) }} method="POST">
    @csrf
    @method('PUT')
    <h1 style="margin-bottom: 40px;"><span>Editar</span> Perfil</h1>
    <div class="wrapper">
        <div class="edicoes">  
            <div class="rating">
                <h2>Dados Pessoais</h2>
            </div>
            <div class="info">
                <div class="resposta">
                    <input type="text" placeholder="Nome" name="nome" style="width: 395px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Sobrenome" name="" style="width: 395px">
                </div>
                <div class="resposta">
                    <textarea placeholder="Sobre mim" name="sobre" id="" cols="37" rows="8" style="border: none; border-radius: 10px;"></textarea>
                </div>
            </div>
        </div>
 
        <div class="edicoes">
            <div class="rating">
                <h2 id="contato">Formas de Contato</h2>
            </div>
            <div class="info">
                <div class="resposta">
                    <input type="text" placeholder="Telefone" name="telefone" style="width: 395px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Email" name="email" style="width: 395px">
                </div>
                <div class="resposta">
                    <textarea placeholder="Redes Sociais" name="outros" cols="37" rows="8" style="border-radius: 10px;"></textarea>
                </div>
            </div>
        </div>
 
        <div class="edicoes">
            <div class="rating">
                <h2 style="margin-top: -70px; margin-bottom: 80px"></i>Formações</h2>
            </div>            
            <div class="info" style="margin-top: -50px;">
                <div class="resposta">
                    <input type="text" placeholder="Cursos" name="cursos" style="width: 395px; height: 95px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Formações" name="formacoes" style="width: 395px; height: 95px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Experiências" name="experiencias" style="width: 395px; height: 95px">
                </div>
 
            </div>
        </div>
    </div>
   
    <button type="submit"><a href="#" class="btn">Salvar</a></button>

</form>
</body>
</html>