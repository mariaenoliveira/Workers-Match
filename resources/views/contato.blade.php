<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="{{asset('contato.css')}}">
</head>


<body>
 
    <div class="topo">
        <h1>*************************</h1>
    </div>
 
    <br>
 
    <h1>Contate-nos</h1>
    <br>
 
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