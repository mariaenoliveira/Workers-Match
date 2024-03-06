<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="{{ asset('login.css') }}">
   
</head>
<body>
    <div class="register-box">
        <form id="msform" class="form">
            <h2>WM</h2>
            <fieldset>
                <h2 class="fs-title">Entre na sua conta</h2>
                <h3 class="fs-subtitle">Por favor, preencha abaixo</h3>
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="pass" placeholder="Senha" />
                <input type="button" name="next" class="next action-button" value="Entrar" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Detalhes Pessoais</h2>
                <h3 class="fs-subtitle">Nós não iremos vender suas informações</h3>
                <input type="text" name="fname" placeholder="Primeiro Nome" />
                <input type="text" name="lname" placeholder="último Nome" />
                <input type="text" name="phone" placeholder="Telefone" />
                <input type="button" class="next action-button" value="Próximo" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Perfil Social</h2>
                <h3 class="fs-subtitle">Sua presença nas redes sociais</h3>
                <input type="text" placeholder="Instagram"/>
                <input type="text" placeholder="Twitter" />
                <input type="button" class="next action-button" value="Enviar">
            </fieldset>
        </form>
    </div>

    <script src="{{ asset('login.js') }}"></script>
   
</body>
</html>
 