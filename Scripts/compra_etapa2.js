let cartao_input = document.getElementById("cartao_input");
let boleto_input = document.getElementById("boleto_input");
let form_boleto = document.querySelector(".escolha_pagamento_boleto");
let form_cartao = document.querySelector(".escolha_pagamento_cartao");
let confirmacao_boleto = document.getElementById("confirmacao_compra_boleto");
let confirmacao_cartao = document.getElementById("confirmacao_compra_cartao");
let situacao_inp_boleto = false;
let situacao_inp_cartao = false;

cartao_input.addEventListener("input", ()=>{
    desativar_form_boleto();
    situacao_inp_cartao = true;
    situacao_inp_boleto = false;
});

boleto_input.addEventListener("input", ()=>{
    desativar_form_cartao();
    situacao_inp_boleto = true;
    situacao_inp_cartao = false;
});


//Mascáras e verificações do cartão
let numero_cartao = document.getElementById("numero_cartao");
let nome_cartao = document.getElementById("nome_cartao");
let dataVenc_cartao = document.getElementById("dataVenc_cartao");
let cvv = document.getElementById("cvv_cartao");

let num_cart_ver = false;//OK
let nom_cart_ver = false;//OK
let dat_cart_ver = false;//OK
let cvv_cart_ver = false;//OK

numero_cartao.addEventListener('keypress', (tecla) =>{
    let numero_cartao_length = numero_cartao.value.length;
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
    
    if (numero_cartao_length === 4 || numero_cartao_length === 9 || numero_cartao_length === 14){
        numero_cartao.value += ' ';
    }

    if(numero_cartao_length === 19){
        num_cart_ver = true;
    }
    else{
        num_cart_ver = false;
    }
}); 
numero_cartao.addEventListener("blur", ()=>{
    if(numero_cartao.value == ""){
        numero_cartao.classList.add("Incorreto");
        numero_cartao.classList.remove("Correto");
    }

    else if(numero_cartao.value.length < 19){
        numero_cartao.classList.add("Incorreto");
        numero_cartao.classList.remove("Correto");
    }

    else{
        numero_cartao.classList.remove("Incorreto");
        numero_cartao.classList.add("Correto");
    }
});

nome_cartao.addEventListener("blur", ()=>{
    if(nome_cartao.value == ""){
        nome_cartao.classList.add("Incorreto");
        nome_cartao.classList.remove("Correto");
        nom_cart_ver = false;
    }
    else{
        nome_cartao.classList.remove("Incorreto");
        nome_cartao.classList.add("Correto");
        nom_cart_ver = true;
    }
});
nome_cartao.addEventListener("input", ()=>{
    nome_cartao.value = nome_cartao.value.toUpperCase();
});


dataVenc_cartao.addEventListener("blur", ()=>{
    if(dataVenc_cartao.value == ""){
        dataVenc_cartao.classList.add("Incorreto");
        dataVenc_cartao.classList.remove("Correto");
        dat_cart_ver = false;
    }
    else{
        dataVenc_cartao.classList.remove("Incorreto");
        dataVenc_cartao.classList.add("Correto");
        dat_cart_ver = true;
    }
});

cvv.addEventListener("blur", ()=>{
    if(cvv.value == ""){
        cvv.classList.add("Incorreto");
        cvv.classList.remove("Correto");
        cvv_cart_ver = false;
    }
    else if(cvv.value.length < 3){
        cvv.classList.add("Incorreto");
        cvv.classList.remove("Correto");
        cvv_cart_ver = false;
    }
    else{
        cvv.classList.remove("Incorreto");
        cvv.classList.add("Correto");
        cvv_cart_ver = true;
    }
});
cvv.addEventListener('keypress', (tecla) =>{
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }

    if(cvv.value.length < 3){
        cvv.classList.add("Incorreto");
        cvv.classList.remove("Correto");
        cvv_cart_ver = false;
    }
    else{
        cvv.classList.remove("Incorreto");
        cvv.classList.add("Correto");
        cvv_cart_ver = true;
    }
})

//Mascáras e verificações do boleto
let cpf_comprador = document.getElementById("cpf_comprador");
let nome_comprador = document.getElementById("nome_comprador");
let dataNasc_comprador = document.getElementById("dataNasc_comprador");
let email_comprador = document.getElementById("email_comprador");
let cpf_compr_ver = false;//OK
let nom_compr_ver = false;//OK
let dat_compr_ver = false;//OK
let eme_compr_ver = false;//OK

cpf_comprador.addEventListener("blur", ()=>{
    if(cpf_comprador.value == ""){
        cpf_comprador.classList.add("Incorreto");
        cpf_comprador.classList.remove("Correto");
        cpf_compr_ver = false;
    }
    else if(cpf_comprador.value.length < 13){
        cpf_comprador.classList.add("Incorreto");
        cpf_comprador.classList.remove("Correto");
        cpf_compr_ver = false;
    }
    else{
        cpf_comprador.classList.remove("Incorreto");
        cpf_comprador.classList.add("Correto");
        cpf_compr_ver = true;
    }
});
cpf_comprador.addEventListener('keypress', (tecla) =>{
    let cpf_comprador_length = cpf_comprador.value.length;
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
    if (cpf_comprador_length === 3 || cpf_comprador_length === 7){
        cpf_comprador.value += '.';
    }
    else if(cpf_comprador_length === 11){
        cpf_comprador.value += '-';
    }

    if(cpf_comprador_length === 13){
        cpf_comprador.classList.remove("Incorreto");
        cpf_comprador.classList.add("Correto");
        cpf_compr_ver = true;
    }
    else{
        cpf_comprador.classList.add("Incorreto");
        cpf_comprador.classList.remove("Correto");
        cpf_compr_ver = false;
    }
}); 

nome_comprador.addEventListener("blur", ()=>{
    if(nome_comprador.value == ""){
        nome_comprador.classList.add("Incorreto");
        nome_comprador.classList.remove("Correto");
        nom_compr_ver = false;
    }
    else{
        nome_comprador.classList.remove("Incorreto");
        nome_comprador.classList.add("Correto");
        nom_compr_ver = true;
    }
});

dataNasc_comprador.addEventListener("blur", ()=>{
    if(dataNasc_comprador.value == ""){
        console.log(`valor do numero do cartao vazio`);
        dataNasc_comprador.classList.add("Incorreto");
        dataNasc_comprador.classList.remove("Correto");
        dat_compr_ver = false;
    }
    else{
        dataNasc_comprador.classList.remove("Incorreto");
        dataNasc_comprador.classList.add("Correto");
        dat_compr_ver = true;
    }
});

email_comprador.addEventListener("blur", ()=>{
    if(email_comprador.value == ""){
        email_comprador.classList.add("Incorreto");
        email_comprador.classList.remove("Correto");
        eme_compr_ver = false;
    }
});
email_comprador.addEventListener('input', () => {
    let emailFormato = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (email_comprador.value.match(emailFormato)){
        email_comprador.classList.remove("Incorreto");
        email_comprador.classList.add("Correto");
        eme_compr_ver = true;
    } 
    else if (email_comprador.value == ""){
        email_comprador.classList.remove("Correto");
        email_comprador.classList.add("Incorreto");
        eme_compr_ver = false;
    }
    else {
        email_comprador.classList.remove("Correto");
        email_comprador.classList.add("Incorreto");
        eme_compr_ver = false;
    }
});

let inputs_cartao = [numero_cartao, nome_cartao, dataVenc_cartao, cvv, confirmacao_cartao];
let inputs_boleto = [cpf_comprador, nome_comprador, dataNasc_comprador, email_comprador, confirmacao_boleto];

document.addEventListener('DOMContentLoaded', function() {
    for(i = 0; i < inputs_boleto.length; i++){
        inputs_boleto[i].disabled = true;
        inputs_cartao[i].disabled = true;
        form_cartao.classList.add("desativado");
        form_boleto.classList.add("desativado");
    }
});


function desativar_form_cartao(){
    for(i = 0; i < inputs_cartao.length; i++){
        inputs_cartao[i].disabled = true;
        form_cartao.classList.add("desativado");
        form_cartao.classList.remove("ativado");
    }
    for(i = 0; i < inputs_boleto.length; i++){
        inputs_boleto[i].disabled = false;
        form_boleto.classList.add("ativado");
        form_boleto.classList.remove("desativado");
    }
}

function desativar_form_boleto(){
    for(i = 0; i < inputs_cartao.length; i++){
        inputs_cartao[i].disabled = false;
        form_cartao.classList.remove("desativado");
        form_cartao.classList.add("ativado");
    }
    for(i = 0; i < inputs_boleto.length; i++){
        inputs_boleto[i].disabled = true;
        form_boleto.classList.remove("ativado");
        form_boleto.classList.add("desativado");
    }
}

function compra_cartao(id_produto){
    if(num_cart_ver && nom_cart_ver && dat_cart_ver && cvv_cart_ver && confirmacao_cartao.checked){
        window.location.href = `compra_etapa3.php?id=${id_produto}`;
        let informacoes_2 = {
            numero:numero_cartao.value,
            nomeTitular:nome_cartao.value,
            dataVenc:dataVenc_cartao.value,
            cvv:cvv.value,
            pagamento: "cartao",
        };
        enviarDadosParaPHP(informacoes_2);
    }
    else{
        alert("Dados inválidos ou campos incompletos!");
    }
}

function compra_boleto(id_produto){
    if(cpf_compr_ver && nom_compr_ver && dat_compr_ver && eme_compr_ver && confirmacao_boleto.checked){
        window.location.href = `compra_etapa3.php?id=${id_produto}`;
        let informacoes_2 = {
            cpf:cpf_comprador.value,
            nome:nome_comprador.value,
            dataNasc:dataNasc_comprador.value,
            email:email_comprador.value,
            pagamento: "boleto",
        };
        enviarDadosParaPHP(informacoes_2);
    }
    else{
        alert("Dados inválidos ou campos incompletos!");
    }
}

function etapa_compra1(id_produto){
    window.location.href = `compra_etapa1.php?id=${id_produto}`;
}

function etapa_compra2(id_produto){
    window.location.href = `compra_etapa2.php?id=${id_produto}`;
}

function etapa_compra3(){
    if(situacao_inp_boleto){
        compra_boleto();
    }
    else if(situacao_inp_cartao){
        compra_cartao();
    }
    else{
        alert("escolha uma opção de pagamento");
    }
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
    fetch('PHP_intermediarios/compra_dados_etapa2.php', {
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