function adicionarCopia() {
    // Obtém a div container original
    var divOriginal = document.querySelector('.card');

    // Cria uma cópia da div container e de todos os seus elementos internos
    var divCopia = divOriginal.cloneNode(true);

    // Adiciona a cópia como um novo nó após a div original
    divOriginal.parentNode.insertBefore(divCopia, divOriginal.nextSibling);
}

function apagarElemento(){
    var divCopia = document.querySelector('.card');

    if (divCopia){
        divCopia.parentNode.removeChild(divCopia);
    }else{
        
    }
}