let lupa_img = document.getElementById('img_lupa');
let barra_pesquisa = document.getElementById('barra_pesquisa');

lupa_img.addEventListener('click', () => {
    console.log("funciona");
    barra_pesquisa.focus();
});

function comprar_carrinho(url){
    fetch('PHP_intermediarios/carrinho_dados.php', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(retornoPHP => {
        comprar_processo(retornoPHP);
    })
    .catch(error => {
        console.error('Erro', error);
    });

    if(url){
        window.location.href = "compra_etapa1.php?carrinho=yes";
    }
    else{
        window.location.href = "login_cliente.php?pag=compra_etapa1.php?carrinho=yes";
    }
}

function comprar_processo(dadosRetornados){
    if(dadosRetornados != ""){
        let dados = [];
        
        for(let i = 0; i < dadosRetornados.length; i++){
            dados[i] = dadosRetornados[i];
        }

        let dados_enviar = {
            produtos: dados,
            acao: 'comprar'
        }

        fetch('PHP_intermediarios/carrinho_dados.php', {
            method: 'POST',
            body: JSON.stringify(dados_enviar),
            headers:{
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(retornoPHP => {
            if(retornoPHP === false){
                alert('Adicione produtos ao carrinho para prosseguir.');
            }
        })
        .catch(error =>{
            console.error('Erro', error);
        });
    }
}

function removerProduto(produto_remover){
    console.log(`Produto para remover ${produto_remover}`);
    let dados = {
        acao: 'remover',
        prod_remover: produto_remover
    };

    fetch('PHP_intermediarios/carrinho_dados.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if(data === true){
            alert('Produto removido');
            location.reload();
        }
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

document.addEventListener('DOMContentLoaded', ()=>{
    let urlAtual = `${window.location.href}`;
    let posicaoCaractere = urlAtual.indexOf("?");
    if (posicaoCaractere !== -1) {
        let resultado = urlAtual.substring(posicaoCaractere);
        if(resultado == '?carrinhoVazio=true'){
            alert('carrinho vazio, insira produtos para prosseguir.');
        }
    }
});


window.addEventListener('resize', function() {

    var largura = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;    

    let categorias_container = document.querySelector('.categorias_container');
    let container_barra = document.querySelector('.container_barra');
    let mostrar_links_header = document.querySelector('.mostrar_links_header');
    let header_direita = document.querySelector('.header_direita');

    // let alfinete_img = document.getElementById("alfinete_img");
    // let lateral_esquerda = document.getElementById("lateral-esquerda");
    // let link_voltar = document.getElementById("link-voltar");

    if(largura > 530){
        // lateral_esquerda.style.height = '40px'; 
        // alfinete_img.style.transform = 'rotateZ(90deg)';  
        // link_voltar.style.top = '235px'
    }
    else{
        // lateral_esquerda.style.height = '40px'; 
        // alfinete_img.style.transform = 'rotateZ(90deg)';  
        // link_voltar.style.top = '180px';  
    }

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