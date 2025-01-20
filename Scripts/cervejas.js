let lupa_img = document.getElementById('img_lupa');
let barra_pesquisa = document.getElementById('barra_pesquisa');

lupa_img.addEventListener('click', () => {
    console.log("funciona");
    barra_pesquisa.focus();
});

function todas_categorias(){
    let categorias_container = document.querySelector('.categorias_container');
    let link_voltar = document.getElementById("link-voltar");

    if(categorias_container.clientHeight == 300){
        var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;  

        if(largura < 531){
            link_voltar.style.top = '180px';
            console.log('1');
        }
        else{
            link_voltar.style.top = '235px';
            console.log('2');
        }

        categorias_container.style.height = "0px";
    }
    else{
        var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth; 

        if(largura < 531){
            link_voltar.style.top = '480px'; 
            console.log('3');
        }
        else{
            link_voltar.style.top = '535px'; 
            console.log('4');
        }

        categorias_container.style.height = "300px";
    }
}

window.addEventListener('resize', function() {

    var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;    

    let categorias_container = document.querySelector('.categorias_container');
    let container_barra = document.querySelector('.container_barra');
    let mostrar_links_header = document.querySelector('.mostrar_links_header');
    let header_direita = document.querySelector('.header_direita');

    let alfinete_img = document.getElementById("alfinete_img");
    let lateral_esquerda = document.getElementById("lateral-esquerda");
    let link_voltar = document.getElementById("link-voltar");

    if(largura > 530){
        lateral_esquerda.style.height = '40px'; 
        alfinete_img.style.transform = 'rotateZ(90deg)';  
        link_voltar.style.top = '235px'
    }
    else{
        lateral_esquerda.style.height = '40px'; 
        alfinete_img.style.transform = 'rotateZ(90deg)';  
        link_voltar.style.top = '180px';  
    }



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

function apresentar_filtro(){
    let alfinete_img = document.getElementById("alfinete_img");
    let lateral_esquerda = document.getElementById("lateral-esquerda");
    let link_voltar = document.getElementById("link-voltar");

    var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth; 


    if(largura < 530){
        if(lateral_esquerda.offsetHeight - 10 < 186){
            lateral_esquerda.style.height = 'fit-content'; 
            alfinete_img.style.transform = 'rotateZ(0deg)';
            link_voltar.style.top = '345px'; 
        }

        else{
            lateral_esquerda.style.height = '40px'; 
            alfinete_img.style.transform = 'rotateZ(90deg)';  
            link_voltar.style.top = '180px'; 
        }    
    }

    else{
        
        if(lateral_esquerda.offsetHeight - 10 < 182){
            lateral_esquerda.style.height = 'fit-content'; 
            alfinete_img.style.transform = 'rotateZ(0deg)';
            link_voltar.style.top = '385px'; console.log('ok');
        }

        else{
            lateral_esquerda.style.height = '40px'; 
            alfinete_img.style.transform = 'rotateZ(90deg)';  
            link_voltar.style.top = '235px'; 
        }    
    }
}