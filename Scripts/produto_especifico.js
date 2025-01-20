let lupa_img = document.getElementById('img_lupa');
let barra_pesquisa = document.getElementById('barra_pesquisa');

lupa_img.addEventListener('click', () => {
    barra_pesquisa.focus();
});

let cep_mascara = document.getElementById("cep_cliente");
cep_mascara.addEventListener('keypress', (tecla) =>{
    let cep_mascara_length = cep_mascara.value.length;
    let teclaPressionada = tecla.key;
    
    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
    if (cep_mascara_length === 2){
        cep_mascara.value += '.';
    }
    else if(cep_mascara_length === 6){
        cep_mascara.value += '-';
    }
})

function exibirInfos(){
    let cep = cep_mascara.value;
    var dados = {
        cep: `${cep[0]}${cep[1]}${cep[3]}${cep[4]}${cep[5]}${cep[7]}${cep[8]}${cep[9]}`};
    let cep_padrao = /^\d{2}\.\d{3}-\d{3}$/;
    if(!cep.match(cep_padrao)){
        alert('Cep Inválido, tente novamente' + ' Formato esperado: xx.xxx-xx');
    }
    else{
        calcular(dados);
    }
}

function calcular(dados){
    fetch('PHP_intermediarios/cep_calculo.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers:{
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(retornoPHP => {
        informacoes(retornoPHP);
    })
    .catch(error =>{
        console.error('Erro', error);
    });
}

function informacoes(info_api){
    let container_cep = document.getElementById('container_cep');
    let cep_fornecido = document.getElementById('cep_fornecido');
    let rua_fornecida = document.getElementById('rua_fornecida');
    let valor_frete = document.getElementById('valor_frete');
    let dataEntrega = document.getElementById('data_entrega');

    if(info_api === false){
        alert("CEP não encontrado, tente novamente.");
        container_cep.classList.remove('visivel');
        container_cep.classList.add('invisivel');
    }
    else{
        container_cep.classList.remove('invisivel');
        container_cep.classList.add('visivel');
        cep_fornecido.innerHTML = `${cep_mascara.value}`;
        valor_frete.innerHTML = `R$ ${info_api[1]}`;
        rua_fornecida.innerHTML = `${info_api[2]}`;

        let data = data_entrega(info_api[0]);
        dataEntrega.innerHTML = `${data}`;
        
        // console.log(`valor total: ${info_api[3]}`);//Preço do produto+frete
    }
}

function data_entrega(dias_entrega){
    let dataAtual = new Date();
    dataAtual.setDate(dataAtual.getDate() + dias_entrega);

    let novoDia = dataAtual.getDate();
    let novoMes = dataAtual.getMonth() + 1; 
    let novoAno = dataAtual.getFullYear();

    let mes_extenso;
    switch (novoMes){
        case 1:
            mes_extenso = 'Janeiro';
            break;
        case 2:
            mes_extenso = 'Fevereiro';
            break;
        case 3:
            mes_extenso = 'Março';
            break;
        case 4:
            mes_extenso = 'Abril';
            break;
        case 5:
            mes_extenso = 'Maio';
            break;
        case 6:
            mes_extenso = 'Junho';
            break;
        case 7:
            mes_extenso = 'Julho';
            break;
        case 8:
            mes_extenso = 'Agosto';
            break;
        case 9:
            mes_extenso = 'Setembro';
            break;
        case 10:
            mes_extenso = 'Outubro';
            break;
        case 11:
            mes_extenso = 'Novembro';
            break;
        case 12:
            mes_extenso = 'Dezembro';
            break;
    }

    return `${novoDia} de ${mes_extenso} de ${novoAno}`;
}

$(document).ready(function () {
    $('#botao_calculo_frete').click(function () {
        $.ajax({
            type: 'GET',
            url: 'PHP_intermediarios/cep_calculo.php',
            dataType: 'json',
            success: function (dados) {
                $('#valor_final').text(dados.novoConteudo);
            },
            error: function (erro) {
                console.log('Erro na solicitação AJAX:', erro);
            }
        });
    });
}); 

function comprar_pagina(url){
    let cep = cep_mascara.value;
    let cep_padrao = /^\d{2}\.\d{3}-\d{3}$/;
    if(cep_mascara.value == ""){
        window.location.href = `${url}.php?carrinho=not`;
    }
    else{
        if(!cep.match(cep_padrao)){
            window.location.href = `${url}.php?carrinho=not&id_produto=${id_produto}`;
        }
        else{
            window.location.href = `${url}.php?cep=${cep_mascara.value}&carrinho=not`;
        }
    }
}

function adicionar_prod_carrinho(id_produto){
    // console.log(id_produto);
    let dados = {
        idProduto: id_produto,
        acao: 'addProduto'
    }
    fetch('PHP_intermediarios/carrinho_dados.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers:{
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(retornoPHP => {
        // console.log(`Id do produto adicionado: ${retornoPHP}`);
    })
    .catch(error =>{
        console.error('Erro', error);
    });
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