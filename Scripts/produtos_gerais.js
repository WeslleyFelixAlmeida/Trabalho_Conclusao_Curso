let container_main = document.querySelector(".container_main");
let botao_lista = document.querySelector(".botoes-top");

function modelagem_lista(){
    container_main.classList.remove("grade-layout");
}

function modelagem_grade(){
    container_main.classList.add("grade-layout");
}

function navegar_home(){
    window.location.href = 'index.php';
}

let lupa_img = document.getElementById('img_lupa');
let barra_pesquisa = document.getElementById('barra_pesquisa');

lupa_img.addEventListener('click', () => {
    console.log("funciona");
    barra_pesquisa.focus();
});


function todas_categorias(){
    let categorias_container = document.querySelector('.categorias_container');
    if(categorias_container.clientHeight == 300){
        categorias_container.style.height = "0px";
    }
    else{
        categorias_container.style.height = "300px";
    }
}

window.addEventListener('resize', function() {

    var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;    
    let container_barra = document.querySelector('.container_barra');
    let mostrar_links_header = document.querySelector('.mostrar_links_header');
    let header_direita = document.querySelector('.header_direita');

    if(largura < 816){

    }   
    else{
        container_barra.style.display = 'flex';
    }

    if(largura > 530){
        mostrar_links_header.style.display = 'none';
        container_barra.style.display = 'flex';
        header_direita.style.display = 'flex';
    }
    else{
        mostrar_links_header.style.display = 'block';
        header_direita.style.display = 'none';
        container_barra.style.display = 'flex';
    }

    if(largura <= 550){
        container_main.classList.add("grade-layout");
        botao_lista.style.display = 'none';
    }

    let lateral_esquerda = document.querySelector('.lateral-esquerda');

    if(largura > 900){
        lateral_esquerda.style.height = 'auto';
    }
    else{
        lateral_esquerda.style.height = '50px';
    }
});

function mostrar_links_header(){
    let header_direita = document.querySelector('.header_direita');
    let container_barra = document.querySelector('.container_barra');
    if(header_direita.style.display == 'flex'){
        header_direita.style.display = 'none';
        container_barra.style.display = 'flex';
    }
    else{
        header_direita.style.display = 'flex'; 
        container_barra.style.display = 'none';
    }
} 

document.addEventListener('DOMContentLoaded', ()=>{
    var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;  
    if(largura <= 550){
        container_main.classList.add("grade-layout");
        botao_lista.style.display = 'none';
    }
});

function apresentarFiltros(){
    var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;  

    let lateral_esquerda = document.querySelector('.lateral-esquerda');
    if(largura < 901){
        if(lateral_esquerda.clientHeight <= 100){
            lateral_esquerda.style.height = 'fit-content';
            console.log(1);
        }

        else{
            lateral_esquerda.style.height = '50px';
            console.log(2);
        }
    }
}