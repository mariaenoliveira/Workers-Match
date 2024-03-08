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
 
    <nav>
        <div class="nav-logo">
            <a href="#">
                <h1 id="teste">WM</h1> 
                <!-- <img src="image/logo.png">  -->
            </a>
        </div>
 
        <ul class="nav-links">
            <li class="link"><a href="/inicial">Inicio</a></li>
            <li id="link1" class="link"><a href="">Recursos</a></li>
            <li id="link3" class="dropdown">
                    <a class="frase" href="#">Segurança</a>
                    <div class="dropdown-content">
                        <a href="/regrasdacomunidade/regrasComunidade">Regras da Comunidade</a>
                        <a href="/dicasdeseguranca/dicasDeSeguranca">Dicas de Segurança</a>
                        <a href="/segurancaDenuncia/segurancaDenuncia">Segurança e Denúncia</a>
                    </div>
                </li>
        </ul>
    </nav>
 
    <br>
 
    <h1>CONTATE-NOS</h1>
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
                <a class="icon" href="https://www.instagram.com/luansantana?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram fa-3x instagram-icon"></i></a>
                <a class="icon" href=""><svg xmlns="http://www.w3.org/2000/svg" width="45" height="46" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg></a>
                <a class="icon" href="https://www.facebook.com/groups/grupolivrosecitacoes/"><i class="fab fa-facebook fa-3x social-icon"></i></a>
                
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