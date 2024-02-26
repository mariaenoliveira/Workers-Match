<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contato.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


<style>

*{
    color: white;    
}
 
body{
    background-color: #27272a;
}
 
#contato{
    background-color: #27272A;
    margin-left: 15px;
    width: 25.5rem;
    border: 2px solid #1d4ed8;
    border-radius: 7px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
 
#input{
    background-color: #27272A;
    margin-right: 16px;
    margin-left: 14.5px;
    border: 2px solid #1d4ed8;
    border-radius: 7px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
 
#input1{
    background-color: #27272A;
    margin-left: 15px;
    width: 29.8rem;
    border: 2px solid #1d4ed8;
    border-radius: 7px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
 
.caixa{
    display: flex;
    justify-content: flex-start;
    margin-bottom: 15px;
    margin-top: 15px;
}
 
.formulario{
    margin-right: 120px;
}
 
/* .escrita{
 
} */
 
.botao{
    background-color: #1d4ed8;
    color: white;
    width: 6rem;
    height: 3rem;
    margin-top: 15px;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.1s ease;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
 
.botao:hover {
    background-color: #122f7e;
    transform: scale(1.05);
    border-color: white;
}
 
.inicio{
    display: flex;
    flex-direction: column;
    margin-left: 248px;
}
 
.nome{
    font-size: 30px;
    color: #1d4ed8;
    text-shadow: 2px 2px 10px black;
}
 
.topo{
    display: flex;
    justify-content: center;
}
 
.frase{
    margin-bottom: 50px;
}
 
.container{
    display: flex;
    justify-content: center;
    align-items: center;
}
 
.fraseFinal{
    font-size: 18px;
}
 
.linha{
    height: 3px;
    border: none;
    background-color: white;
}
 
.redesSociais{
    color: #1d4ed8;
    text-shadow: 2px 2px 10px black;
}
 
.apps{
    display: flex;
    justify-content: space-around;
}
 
a{
    cursor: pointer;
    transition: all 0.1s ease;
}
 
a:hover{
    transform: scale(1.2);
}
 
 
@media (min-width: 410px) and (max-width: 920px) {
    /* Estilos para telas entre 768 e 1024 pixels de largura */
.container{
    display: flex;
    align-items: flex-start;
    flex-direction: column;
}
 
.caixa{
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    margin-left: 15px;
}
 
.formulario{
    display: flex;
    align-items: flex-start;
    flex-direction: column;
}
 
#input1{
    width: 20rem;
}
 
#contato{
    width: 20rem;
}
 
.inicio{
    display: flex;
    justify-content: center;
}
 
.nome{
    display: flex;
    Justify-content: center;
    /* align-items: flex-start;
    flex-direction: row; */
    margin-left: -220px;
}
 
.frase{
    margin-left: 15px;
}
 
.lateral{
    margin-top: 100px;
}
 
.redesSociais{
    display: flex;
    justify-content: center;
    margin-left: 15px;
}
 
.apps{
    display: flex;
    justify-content: space-evenly;
     margin-left: 15px;
}
 
.fraseFinal{
    display: flex;
    justify-content: center;
    margin-left: 20px;
}
 
.botao{
    margin-left: 30px;
}
 
}
 
@media (min-width: 1020px) and (max-width:1400px) {
 
.container{
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: center;
}
 
.caixa
{
     margin-left: 150px;
}
 
.frase
{
    margin-left: 190px;
}
 
.nome
{
    margin-left: 160px;
}
 
.botao
{
    margin-left: 300px;
 }
 
.redesSociais
{
        margin-top: 100px;
        margin-left: 330px;
}
 
.apps
{
     margin-left: 300px;
     display: flex;
     justify-content: space-between
}
 
.linha
{
    margin-left: 295px;
}
 
.fraseFinal
{
     margin-left: 290px;    
}

}
</style>


<body>
 
    <div class="topo">
        <h1>*************************</h1>
    </div>
 
    <br><br>
 
    <div class="inicio">
        <div>
            <strong class="nome">Contate-nos</strong>
        </div>
        <br>
    </div>
 
    <div class="container">
 
        <div class="formulario">
 
            <p class="frase">Preencha o formulário com seus dados para que possamos ajudá-lo.</p>
 
            <div class="caixa">
                Nome: <input type="text" id="input">
                Sobrenome: <input type="text" id="input">
            </div>
            <div class="caixa">
                E-mail: <input type="text" id="input">
                Telefone: <input type="text" id="input" style="width: 13.2rem;">
            </div>
            <div class="caixa">
                Empresa: <input type="text" id="input1">
            </div>
            <div class="caixa">
                Motivo do contato: <textarea name="contato" id="contato" cols="30" rows="10"></textarea>
            </div>
 
            <button class="botao" id="enviar">Enviar</button>
 
        </div>
 
        <div class="lateral">
 
            <h4 class="redesSociais">Nos siga nas redes sociais</h4>
 
            <br>
 
            <div class="apps">
                <a href="https://www.instagram.com/luansantana?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram fa-3x instagram-icon"></i></a>
                <a href="https://www.whatsapp.com/download/"><i class="fab fa-whatsapp fa-3x whatsapp-icon"></i></a>
                <a href="https://www.facebook.com/groups/grupolivrosecitacoes/"><i class="fab fa-facebook fa-3x social-icon"></i></a>
                <a href="https://www.linkedin.com/company/porto/"><i class="fab fa-linkedin fa-3x social-icon"></i></a>
                <a href="https://x.com/FoguinhoCal?s=20"><i class="fab fa-twitter fa-3x social-icon"></i></a>
            </div>
 
            <br>
            <hr class="linha">
            <br>
            <br>
            <p class="fraseFinal">Entraremos em contato em até duas horas.</p>
 
        </div>
    </div>
 
    <script src="contato.js"></script>
 
</body>
 
</html>