function adicionarCurso() {
    // Obtém a div container original
    var divOriginal = document.querySelector('.card');

    // Cria uma cópia da div container e de todos os seus elementos internos
    var divCopia = divOriginal.cloneNode(true);

    // Adiciona a cópia como um novo nó após a div original
    divOriginal.parentNode.insertBefore(divCopia, divOriginal.nextSibling);
}

function apagarCurso(){
    var divCopia = document.querySelector('.card');

    if (divCopia){
        divCopia.parentNode.removeChild(divCopia);
    }else{
        
    }
}



function adicionarFormacao() {
    // Obtém a div container original
    var divOriginal = document.querySelector('.card');

    // Cria uma cópia da div container e de todos os seus elementos internos
    var divCopia = divOriginal.cloneNode(true);

    // Adiciona a cópia como um novo nó após a div original
    divOriginal.parentNode.insertBefore(divCopia, divOriginal.nextSibling);
}

function apagarFormacao(){
    var divCopia = document.querySelector('.card');

    if (divCopia){
        divCopia.parentNode.removeChild(divCopia);
    }else{
        
    }
}


function adicionarExperiencia() {
    // Obtém a div container original
    var divOriginal = document.querySelector('.card');

    // Cria uma cópia da div container e de todos os seus elementos internos
    var divCopia = divOriginal.cloneNode(true);

    // Adiciona a cópia como um novo nó após a div original
    divOriginal.parentNode.insertBefore(divCopia, divOriginal.nextSibling);
}

function apagarExperiencia(){
    var divCopia = document.querySelector('.card');

    if (divCopia){
        divCopia.parentNode.removeChild(divCopia);
    }else{
        
    }
}


function adicionarContato() {
    // Obtém a div container original
    var divOriginal = document.querySelector('.card');

    // Cria uma cópia da div container e de todos os seus elementos internos
    var divCopia = divOriginal.cloneNode(true);

    // Adiciona a cópia como um novo nó após a div original
    divOriginal.parentNode.insertBefore(divCopia, divOriginal.nextSibling);
}

function apagarContato(){
    var divCopia = document.querySelector('.card');

    if (divCopia){
        divCopia.parentNode.removeChild(divCopia);
    }else{
        
    }
}