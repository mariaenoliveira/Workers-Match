<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('contato.css') }}">
</head>
<body>


    <section class="contact">
        <div class="contact-form">
            <h1>Contate-<span>nos</span></h1>
            <p>Está com problemas? Precisa da nossa ajuda? Nos envie uma mensagem explicando o problema, vamos ajudar você a resolver!
            </p>
 
            <form action="/contato" method="POST">
                @csrf
                <input type="text" placeholder="Seu nome" name="nome" required>
                <input type="email" name="email" id="" placeholder="E-mail" required>
                <input type="text" placeholder="Escreva o assunto" name="assunto" required>
                <textarea id="" cols="30" rows="10" placeholder="Sua mensagem" name="contato" required></textarea>
                <a href="/inicial"><input type="submit" value="Enviar" class="btn"></a>
           
            </form>
        </div>
 
        <div class="inicio-img">
            <img src="../image/teste.jpg">
        </div>
    </section>

</body>
</html>