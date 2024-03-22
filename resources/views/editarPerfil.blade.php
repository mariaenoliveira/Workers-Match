<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('editarPerfil.css')}}">

    <script src="https://kit.fontawesome.com/ef7b1eb764.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="topo">
        <h1>*************************</h1>
    </div>

    <h1><i class="fa-solid fa-user"></i>Editar Perfil</h1>
    <br><br>

    <div class="container">

        <div class="dados">
            <div class="dadosPessoais">
                <h2>Dados Pessoais</h2>
                <textarea name="foto" id="" cols="30" rows="10"></textarea>
                <div class="caixa">
                    Nome: <input type="text" style="width: 200px">
                    Sobrenome: <input type="text" style="width: 200px">
                </div>
            </div>

            {{-- <div class="contato">
                <h2>Contato</h2>
                <div class="caixa">
                    Telefone: <input type="text" style="width: 200px">
                    Email: <input type="text" style="width: 227px">
                </div>
                <div class="caixa">
                    Linkedin: <input type="text" style="width: 200px">
                    Instagram: <input type="text" style="width: 200px">
                </div>
            </div> --}}

            <div class="endereco">
                <h2>Endereço</h2>
                <div class="caixa">
                    Rua: <input type="text"  style="width: 260px">
                    Bairro: <input type="text" style="width: 200px">
                </div>
                <div class="caixa">
                    Numero: <input type="text"  style="width: 240px">
                    Complemento: <input type="text"  style="width: 130px">
                </div>
                <div class="caixa">
                    CEP: <input type="text"  style="width: 240px">
                    Cidade: <input type="text"  style="width: 200px">
                    Estado: <input type="text"  style="width: 200px">
                </div>
            </div>

        </div>

    </div>

    

</body>
</html>