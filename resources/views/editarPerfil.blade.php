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
 
    <h1 style="margin-bottom: 40px;"><span>Editar</span> Perfil</h1>
    <div class="wrapper">
        <div class="edicoes">  
            <div class="rating">
                <h2>Dados Pessoais</h2>
            </div>
            <div class="info">
                <div class="resposta">
                    <input type="text" placeholder="Nome" style="width: 395px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Sobrenome" style="width: 395px">
                </div>
                <div class="resposta">
                    <textarea placeholder="Informações" name="" id="" cols="37" rows="8" style="border: none; border-radius: 10px;"></textarea>
                </div>
            </div>
        </div>
 
        <div class="edicoes">
            <div class="rating">
                <h2 id="contato">Formas de Contato</h2>
            </div>
            <div class="info">
                <div class="resposta">
                    <input type="text" placeholder="Telefone" style="width: 395px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Email" style="width: 395px">
                </div>
                <div class="resposta">
                    <textarea placeholder="Redes Sociais" id="" cols="37" rows="8" style="border-radius: 10px;"></textarea>
                </div>
            </div>
        </div>
 
        <div class="edicoes">
            <div class="rating">
                <h2 style="margin-top: -120px;"></i>Endereço</h2>
            </div>            
            <div class="info" style="margin-top: -50px;">
                <div class="resposta">
                    <input type="text" placeholder="Rua" style="width: 395px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Número" style="width: 190px">
                    <input type="text" placeholder="Complemento" style="width: 190px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Bairro" style="width: 395px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Cidade" style="width: 395px">
                </div>
                <div class="resposta">
                    <input type="text" placeholder="Estado" style="width: 395px">
                </div>
 
            </div>
        </div>
    </div>
   
    <button><a href="#" class="btn">Salvar</a></button>
</body>
</html>