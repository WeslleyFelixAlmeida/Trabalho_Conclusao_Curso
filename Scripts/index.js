let carrossel_cards_02 = document.querySelector(".container_cards_2");
const img = document.querySelectorAll(".container_cards_2 img");

let fotos = 0;

function carrossel_direita(){
    fotos ++;
    if(fotos > 1.5){
        fotos = 0;
    }
    console.log(img.length)

    carrossel_cards_02.style.transform = `translateX(${-fotos * 1100}px)`;
}

function carrossel_esquerda(){
    fotos ++;
    if(fotos > 1.5){
        fotos = 0;
    }
    console.log(img.length)

    carrossel_cards_02.style.transform = `translateX(${-fotos * 1100}px)`;
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

    let categorias_container = document.querySelector('.categorias_container');
    let container_barra = document.querySelector('.container_barra');
    let mostrar_links_header = document.querySelector('.mostrar_links_header');
    let header_direita = document.querySelector('.header_direita');

    if(largura < 816){
        categorias_container.style.height = "0px";
    }
    else{
        categorias_container.style.height = "40px";
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