//Validações:
let cep = false;
let rua = false;
let estado = false;
let numero = false;
let complemento = false;
let bairro = false;
let logradouro = false;
let municipio = false;

let cep_mascara = document.getElementById("cep");
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

cep_mascara.addEventListener("blur", ()=>{   
    if(cep_mascara.value == ""){
        cep_mascara.classList.add("Incorreto");
        cep_mascara.classList.remove("Correto");
        cep = false;
    }
});

cep_mascara.addEventListener("input", ()=>{
    let cep_padrao = /^\d{2}\.\d{3}-\d{3}$/;

    if(cep_mascara.value.length == 10 && cep_mascara.value.match(cep_padrao)){
        cep_mascara.classList.remove("Incorreto");
        cep_mascara.classList.add("Correto");
        cep = true;
        receberDadosCEP(cep_mascara.value);
        exibirInfos();
    }
    else{
        cep_mascara.classList.add("Incorreto");
        cep_mascara.classList.remove("Correto"); 
        cep = false;
    }
})

document.addEventListener('DOMContentLoaded', function() {
    if(cep_mascara.value != ""){
        receberDadosCEP(cep_mascara.value);
        exibirInfos();
        console.log("funciona");
    }
});


let rua_input = document.getElementById("rua");
rua_input.addEventListener("blur", ()=>{
    if(rua_input.value == ""){
        rua_input.classList.add("Incorreto");
        rua_input.classList.remove("Correto"); 
        rua = false;
    }
    else{
        rua_input.classList.remove("Incorreto");
        rua_input.classList.add("Correto");
        rua = true;
    }
});


let estado_input = document.getElementById("estado");
estado_input.addEventListener("blur", ()=>{
    if(estado_input.value == "" || estado_input.value.length != 2){
        estado_input.classList.add("Incorreto");
        estado_input.classList.remove("Correto"); 
        estado = false;
    }
    else{
        estado_input.classList.remove("Incorreto");
        estado_input.classList.add("Correto");
        estado = true;
    }
});

estado_input.addEventListener('keypress', (tecla) =>{
    let teclaPressionada = tecla.key;
    if (!/[a-zA-Z]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
});


let numero_input = document.getElementById("numero");
numero_input.addEventListener("blur", ()=>{
    if(numero_input.value == ""){
        console.log("valor numero vazio");
        numero_input.classList.add("Incorreto");
        numero_input.classList.remove("Correto"); 
        numero = false;
    }
    else{
        numero_input.classList.remove("Incorreto");
        numero_input.classList.add("Correto");
        numero = true;
    }
});

numero_input.addEventListener('keypress', (tecla) =>{
    let teclaPressionada = tecla.key;
    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
});


let complemento_input = document.getElementById("complemento");
complemento_input.addEventListener("blur", ()=>{
    if(complemento_input.value == ""){
        complemento_input.classList.add("Incorreto");
        complemento_input.classList.remove("Correto"); 
        complemento = false;
    }
    else{
        complemento_input.classList.remove("Incorreto");
        complemento_input.classList.add("Correto");
        complemento = true;
    }
});


let bairro_input = document.getElementById("bairro");
bairro_input.addEventListener("blur" , ()=>{
    if(bairro_input.value == ""){
        bairro_input.classList.add("Incorreto");
        bairro_input.classList.remove("Correto"); 
        bairro = false;
    }
    else{
        bairro_input.classList.remove("Incorreto");
        bairro_input.classList.add("Correto");
        bairro = true;
    }
});


let logradouro_input = document.getElementById("logradouro");
logradouro_input.addEventListener("blur" , ()=>{
    if(logradouro_input.value == ""){
        logradouro_input.classList.add("Incorreto");
        logradouro_input.classList.remove("Correto"); 
        logradouro = false;
    }
    else{
        logradouro_input.classList.remove("Incorreto");
        logradouro_input.classList.add("Correto");
        logradouro = true;
    }
});


let municipio_input = document.getElementById("municipio");
municipio_input.addEventListener("blur" , ()=>{
    if(municipio_input.value == ""){
        municipio_input.classList.add("Incorreto");
        municipio_input.classList.remove("Correto"); 
        municipio = false;
    }
    else{
        municipio_input.classList.remove("Incorreto");
        municipio_input.classList.add("Correto");
        municipio = true;
    }
});


function etapa_compra1(id_produto){
    window.location.href = `compra_etapa1.php?id=${id_produto}`;
}

function etapa_compra2(id_produto){
    if(cep && rua && estado && numero && complemento && bairro && logradouro && municipio){
        window.location.href = `compra_etapa2.php?id=${id_produto}`;
        var informacoes = {
            cep_valor: cep_mascara.value, 
            rua_valor: rua_input.value, 
            estado_valor: estado_input.value, 
            numero_valor: numero_input.value, 
            complemento_valor: complemento_input.value, 
            bairro_valor: bairro_input.value, 
            logradouro_valor: logradouro_input.value, 
            municipio_valor: municipio_input.value, 
        };
        /*
        Enviar para o php essas informações e atribui-las a variaveis session para trabalhar com elas ao longo do processo de compra.
        */
        enviarDadosParaPHP(informacoes);
    }

    else if(cep && rua_input.value != "" && estado_input.value != "" && numero_input.value != "" && complemento_input.value != "" && bairro_input.value != "" && logradouro_input.value != "" && municipio_input.value != ""){
        window.location.href = `compra_etapa2.php?id=${id_produto}`;
        var informacoes = {
            cep_valor: cep_mascara.value, 
            rua_valor: rua_input.value, 
            estado_valor: estado_input.value, 
            numero_valor: numero_input.value, 
            complemento_valor: complemento_input.value, 
            bairro_valor: bairro_input.value, 
            logradouro_valor: logradouro_input.value, 
            municipio_valor: municipio_input.value, 
        };
        console.log(informacoes);
        enviarDadosParaPHP(informacoes);
    }

    else{
        alert("Há informações inválidas!");

        if(!cep){
            cep_mascara.classList.add("Incorreto");
            cep_mascara.classList.remove("Correto"); 
        }

        if(!rua && rua_input.value != ""){
            rua_input.classList.add("Incorreto");
            rua_input.classList.remove("Correto"); 
        }

        if(!estado && estado_input.value != ""){
            estado_input.classList.add("Incorreto");
            estado_input.classList.remove("Correto"); 
        }

        if(!numero && numero_input.value != ""){
            numero_input.classList.add("Incorreto");
            numero_input.classList.remove("Correto"); 
        }

        if(!complemento && complemento_input.value != ""){
            complemento_input.classList.add("Incorreto");
            complemento_input.classList.remove("Correto"); 
        }

        if(!bairro && bairro_input.value != ""){
            bairro_input.classList.add("Incorreto");
            bairro_input.classList.remove("Correto"); 
        }

        if(!logradouro && logradouro_input.value != ""){
            logradouro_input.classList.add("Incorreto");
            logradouro_input.classList.remove("Correto"); 
        }

        if(!municipio && municipio_input.value != ""){
            municipio_input.classList.add("Incorreto");
            municipio_input.classList.remove("Correto"); 
        }
    }
}

function etapa_compra3(id_produto){
    window.location.href = `compra_etapa3.php?id=${id_produto}`;
}

function navegar_home(){
    window.location.href = "index.php";
}

function produto_especifico(id_produto){
    window.location.href = `produto_especifico.php?id=${id_produto}`;
}

function finalizar_compra(){
    window.location.href = "perfil.php";
}

function enviarDadosParaPHP(dados) {
    fetch('PHP_intermediarios/compra_dados_etapa1.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

function receberDadosCEP(cep){
    var dados = {
        cep: `${cep[0]}${cep[1]}${cep[3]}${cep[4]}${cep[5]}${cep[7]}${cep[8]}${cep[9]}`};

    fetch('PHP_intermediarios/receberDadosAPI_CEP.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log(`CEP: ${data['cep']}`);
        console.log(`Endereço: ${data['logradouro']}`);
        console.log(`Estado: ${data['uf']}`);
        console.log(`Bairro: ${data['bairro']}`);
        console.log(`Logradouro: ${data['logradouro']}`);
        console.log(`Municipio: ${data['localidade']}`);
        
        if(data['cep']){
            rua_input.value = data['logradouro'];
            estado_input.value = data['uf'];
            bairro_input.value = data['bairro'];
            logradouro_input.value = data['logradouro'];
            municipio_input.value = data['localidade'];
        }
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

//
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
    let valor_frete = document.getElementById('valor_frete');
    let dataEntrega = document.getElementById('dataEntrega');

    if(info_api === false){
        valor_frete.innerHTML = `CEP Inválido!`;
        dataEntrega.innerHTML = ``;
        cep = false;
    }
    else{
        valor_frete.innerHTML = `Preço do frete: R$ ${info_api[1]}`;
        let data = data_entrega(info_api[0]);
        dataEntrega.innerHTML = `Data de entrega estimada: ${data}`;
        cep = true;
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