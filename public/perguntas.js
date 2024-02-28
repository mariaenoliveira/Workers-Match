function troca(){
 
    var resposta = document.querySelector(".resposta")

    if(resposta.style.display == "none") { //verifica se o texto está sendo exibido, se não estiver vai executar os comandos abaixo e se tiver vai executar o else
       resposta.style.display="block" //exibe o texto
    }
    else { //se a imagem estiver sendo exibida vai executar os comandos abaixo
       resposta.style.display="none"; //oculta o texto
    }
}