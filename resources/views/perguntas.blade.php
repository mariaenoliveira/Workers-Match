<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('perguntas.css') }}">
    {{-- <script src="perguntas.js"></script> --}}
    <title>Perguntas Frequentes</title>
</head>
<body>

    <h1>Perguntas frequentes</h1>
 
    <div class="container">
 
        <div class="pergunta" onclick="click()">
            <h3 class="pergunta-titulo" onclick="troca()">
                Quais são os requisitos para se candidatar a uma vaga?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">
                    Após o "match" com a vaga, ela ficará salva e você poderá
                    se candidatar apenas clicando em "Me candidatar(?)".
                </p>
            </div>  
        </div>
       
        <hr>
 
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Quanto tempo leva para obter uma resposta após enviar minha candidatura?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">
                    Os recrutadores estão ativos na plataforma todos os dias! Com isso,
                    rapidamente sua candidatura será respondida pela empresa.
                </p>
            </div>
        </div>
       
        <hr>
       
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Como são realizadas as entrevistas?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">
                    Cada empresa possui seu próprio jeito de entrevistar, podendo ser
                    presencial ou remoto, essa informação é fornecida pela empresa assim que você for
                    aprovado.
                </p>
            </div> 
        </div>
       
        <hr>
       
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Posso retirar minha candidatura após enviá-la?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>
            
            <div class="box">
                <p class="resposta">Sim, entrando na vaga candidatada, clique em "Desistir da vaga(?)".</p>
            </div> 
        </div>
       
        <hr>
       
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Quais tipos de oportunidades estão disponíveis?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">
                    As oportunidades são oferecidas conforme as informções fornecidas pelo
                    usuário na página de "especificações de vagas(?)".
                </p>
            </div>  
        </div>
       
        <hr>
       
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Quais são os passos seguintes após selecionar uma vaga?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">
                    Após se candidatar, os recrutadores serão notificados e terão acesso ao seu
                    currículo e a partir daí, a empresa fará o processo seletv=ivo da maneira que preferir.
                </p>
            </div>
        </div>
       
        <hr>
       
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Posso salvar vagas para revisar mais tarde?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">Sim, na aba de "Minhas vagas" você poderá salvar vagas para uma análise posteriormente.</p>
            </div>  
        </div>
       
        <hr>
       
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Como posso editar ou atualizar meu currículo e informações de contato?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">
                    No perfil do usuário você encontrará o botão de "Editar Perfil", onde você poderá
                    trocar nome do usuário, informações pessoais e informações do currículo.
                </p>
            </div>
        </div>
       
        <hr>
       
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Posso contatar o empregador diretamente se tiver dúvidas sobre a vaga?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">
                    Sim, na aba da vaga será disponibilizado contatos como telefone ou email para que o
                    candidato possa tirar dúvidas.
                </p>
            </div> 
        </div>
 
        <hr>
 
        <div class="pergunta">
            <h3 class="pergunta-titulo" onclick="troca()">
                Quais são as políticas de privacidade e segurança dos dados do site?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="seta" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </h3>

            <div class="box">
                <p class="resposta">Acesse as políticas de privacidade do site:
                    <a href="http://127.0.0.1:8000/inicial/Privacidade">Política de Privacidade</a>
                </p>
            </div>
        </div>
 
    </div>


    <script>


        function troca(){
        
            var resposta = document.querySelector(".resposta")

            if(resposta.style.display == "none") { //verifica se o texto está sendo exibido, se não estiver vai executar os comandos abaixo e se tiver vai executar o else
                resposta.style.display="block" //exibe o texto
            }
            else { //se a imagem estiver sendo exibida vai executar os comandos abaixo
                resposta.style.display="none"; //oculta o texto
            }
        }
    </script>
 
    <!-- CÓDIGO SETA PARA BAIXO: <i class="bi bi-caret-down-fill"></i>  -->
    <!-- CÓDIGO SETA PARA O LADO:  <i class="bi bi-caret-left-fill"></i>  -->

</body>
</html>