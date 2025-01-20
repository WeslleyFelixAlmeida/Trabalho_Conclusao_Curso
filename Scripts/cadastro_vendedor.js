//Mascaras dos inputs
let cpf_mascara = document.getElementById("cpf_validacao");
cpf_mascara.addEventListener('keypress', (tecla) =>{
    let cpf_mascara_length = cpf_mascara.value.length;
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
    if (cpf_mascara_length === 3 || cpf_mascara_length === 7){
        cpf_mascara.value += '.';
    }
    else if(cpf_mascara_length === 11){
        cpf_mascara.value += '-';
    }
});

let cnpj_mascara = document.getElementById("cnpj_validacao");
cnpj_mascara.addEventListener('keypress', (tecla) => {
    let cnpj_mascara_length = cnpj_mascara.value.length;
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
    if (cnpj_mascara_length === 2 || cnpj_mascara_length === 6){
        cnpj_mascara.value += '.';
    }
    else if(cnpj_mascara_length === 10) {
        cnpj_mascara.value += '/000';
    }
    else if(cnpj_mascara_length === 15){
        cnpj_mascara.value += '-';
    }
});


let telefone_mascara = document.getElementById("telefone_validacao");
telefone_mascara.addEventListener('keypress', (tecla) =>{
    let telefone_mascara_length = telefone_mascara.value.length;
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
    
    if(telefone_mascara_length === 0){
        telefone_mascara.value += '(';
    }
    else if(telefone_mascara_length === 3){
        telefone_mascara.value += ') ';
    }
    else if(telefone_mascara_length === 6){
        telefone_mascara.value += ' ';
    }
    else if (telefone_mascara_length === 11){
        telefone_mascara.value += '-';
    }
})

let email_mascara = document.getElementById("email_validacao");
email_mascara.addEventListener('input', () => {
    let emailFormato = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (email_mascara.value.match(emailFormato)){
        email_mascara.classList.remove("Incorreto");
        email_mascara.classList.add("Correto");
    } 
    else if (email_mascara.value == ""){
        email_mascara.classList.remove("Correto");
        email_mascara.classList.add("Incorreto");
    }
    else {
        email_mascara.classList.remove("Correto");
        email_mascara.classList.add("Incorreto");
    }
});
  
//Validações 

//Usuário
let usuario_validacao = document.getElementById("usuario_validacao");

usuario_validacao.addEventListener('input', ()=>{
    if(usuario_validacao.value == ""){
        usuario_validacao.classList.add('Incorreto');
        usuario_validacao.classList.remove('Correto');
    }
    else if(usuario_validacao.value.length < 5){
        usuario_validacao.classList.add('Incorreto');
        usuario_validacao.classList.remove('Correto');
    }
    else{
        usuario_validacao.classList.add('Correto');
        usuario_validacao.classList.remove('Incorreto');
    }
})

usuario_validacao.addEventListener('blur', ()=>{
    if(usuario_validacao.value == ""){
        usuario_validacao.classList.add('Incorreto');
        usuario_validacao.classList.remove('Correto');
    }
})

//E-mail
let email_validacao = document.getElementById("email_validacao");

email_validacao.addEventListener('blur', ()=>{
    if(usuario_validacao.value == ""){
        email_validacao.classList.add('Incorreto');
        email_validacao.classList.remove('Correto');
    }
})

//Data de nascimento
let dataNasc_validacao = document.getElementById("dataNasc_validacao");

dataNasc_validacao.addEventListener('input', ()=>{
    if(dataNasc_validacao.value == ""){
        dataNasc_validacao.classList.add('Incorreto');
        dataNasc_validacao.classList.remove('Correto');
    }else{
        dataNasc_validacao.classList.add('Correto');
        dataNasc_validacao.classList.remove('Incorreto');
    }
})

dataNasc_validacao.addEventListener('blur', ()=>{
    if(dataNasc_validacao.value == ""){
        dataNasc_validacao.classList.add('Incorreto');
        dataNasc_validacao.classList.remove('Correto');
    }
})

//Telefone
let telefone_validacao = document.getElementById("telefone_validacao");

telefone_validacao.addEventListener('input', ()=>{
    if(telefone_validacao.value == ""){
        telefone_validacao.classList.add('Incorreto');
        telefone_validacao.classList.remove('Correto');
    }
    else if(telefone_validacao.value.length < 16){
        telefone_validacao.classList.add('Incorreto');
        telefone_validacao.classList.remove('Correto');
    }
    else{
        telefone_validacao.classList.add('Correto');
        telefone_validacao.classList.remove('Incorreto');
    }
})

telefone_validacao.addEventListener('blur', ()=>{
    if(telefone_validacao.value == ""){
        telefone_validacao.classList.add('Incorreto');
        telefone_validacao.classList.remove('Correto');
    }
})

//CPF
let cpf_validacao = document.getElementById("cpf_validacao");

cpf_validacao.addEventListener('input', ()=>{
    if(cpf_validacao.value == ""){
        cpf_validacao.classList.add('Incorreto');
        cpf_validacao.classList.remove('Correto');
    }
    else if(cpf_validacao.value.length < 14){
        cpf_validacao.classList.add('Incorreto');
        cpf_validacao.classList.remove('Correto');
    }
    else{
        cpf_validacao.classList.add('Correto');
        cpf_validacao.classList.remove('Incorreto');
    }
})

cpf_validacao.addEventListener('blur', ()=>{
    if(cpf_validacao.value == ""){
        cpf_validacao.classList.add('Incorreto');
        cpf_validacao.classList.remove('Correto');
    }
})

//CNPJ
let cnpj_validacao = document.getElementById("cnpj_validacao");

cnpj_validacao.addEventListener('input', ()=>{
    if(cnpj_validacao.value == ""){
        cnpj_validacao.classList.add('Incorreto');
        cnpj_validacao.classList.remove('Correto');
    }
    else if(cnpj_validacao.value.length < 18){
        cnpj_validacao.classList.add('Incorreto');
        cnpj_validacao.classList.remove('Correto');
    }
    else{
        cnpj_validacao.classList.add('Correto');
        cnpj_validacao.classList.remove('Incorreto');
    }
})

cnpj_validacao.addEventListener('blur', ()=>{
    if(cnpj_validacao.value == ""){
        cnpj_validacao.classList.add('Incorreto');
        cnpj_validacao.classList.remove('Correto');
    }
})

//Senha
let senha_validacao = document.getElementById("senha_validacao");

senha_validacao.addEventListener('input', ()=>{
    if(senha_validacao.value == ""){
        senha_validacao.classList.add('Incorreto');
        senha_validacao.classList.remove('Correto');
    }
    else if(senha_validacao.value.length < 5){
        senha_validacao.classList.add('Incorreto');
        senha_validacao.classList.remove('Correto');
    }
    else{
        senha_validacao.classList.add('Correto');
        senha_validacao.classList.remove('Incorreto');
    }
})

senha_validacao.addEventListener('blur', ()=>{
    if(senha_validacao.value == ""){
        senha_validacao.classList.add('Incorreto');
        senha_validacao.classList.remove('Correto');
    }
})

//Confirmação de senha
let confSenha_validacao = document.getElementById("confSenha_validacao");

confSenha_validacao.addEventListener('input', ()=>{
    if(confSenha_validacao.value == ""){
        confSenha_validacao.classList.add('Incorreto');
        confSenha_validacao.classList.remove('Correto');
    }
    else if(confSenha_validacao.value.length < 5){
        confSenha_validacao.classList.add('Incorreto');
        confSenha_validacao.classList.remove('Correto');
    }
    else{
        confSenha_validacao.classList.add('Correto');
        confSenha_validacao.classList.remove('Incorreto');
    }
})

confSenha_validacao.addEventListener('blur', ()=>{
    if(confSenha_validacao.value == ""){
        confSenha_validacao.classList.add('Incorreto');
        confSenha_validacao.classList.remove('Correto');
    }
})

//Escolha entre CPF ou CNPJ
let cpf_escolha_validacao = document.getElementById('escolha_cpf');
let cnpj_escolha_validacao = document.getElementById('escolha_cnpj');
let container_escolha = document.querySelector('.escolha_cpf_cnpj');
let cpf_label = document.querySelector('.cpf_label');
let cnpj_label = document.querySelector('.cnpj_label');
let data_nasc_label = document.querySelector('.dataNasc_label');

let inputs_cpf_dataNasc = [dataNasc_validacao, data_nasc_label, cpf_validacao, cpf_label];
let inputs_cnpj = [cnpj_validacao, cnpj_label];

cpf_escolha_validacao.addEventListener('change', ()=> {
    if(cpf_escolha_validacao.checked){
        container_escolha.classList.remove("escolha_nao_realizada");
        desativar_cnpj();
    }
})

function desativar_cnpj() {
    dataNasc_validacao.disabled = false;
    cpf_validacao.disabled = false;
    cnpj_validacao.disabled = true;
    cnpj_validacao.value = null;

    for(i=0; i<inputs_cpf_dataNasc.length; i++){
        inputs_cpf_dataNasc[i].classList.remove("desativado");
        inputs_cpf_dataNasc[i].classList.add("ativado");
    }

    for(i=0; i<inputs_cnpj.length; i++) {
        inputs_cnpj[i].classList.remove("ativado");
        inputs_cnpj[i].classList.add("desativado");
    }
}

cnpj_escolha_validacao.addEventListener('change', ()=> {
    if(cnpj_escolha_validacao.checked){
        container_escolha.classList.remove("escolha_nao_realizada")

        desativar_cpf_data_nasc();
    }
})

function desativar_cpf_data_nasc() {
    dataNasc_validacao.disabled = true;
    dataNasc_validacao.value = null;
    cpf_validacao.disabled = true;
    cpf_validacao.value = null;
    cnpj_validacao.disabled = false;

    for(i=0; i<inputs_cpf_dataNasc.length; i++){
        inputs_cpf_dataNasc[i].classList.remove("ativado");
        inputs_cpf_dataNasc[i].classList.add("desativado");
    }

    for(i=0; i<inputs_cnpj.length; i++) {
        inputs_cnpj[i].classList.remove("desativado");
        inputs_cnpj[i].classList.add("ativado");
    }
}



function navegar(){
    let receber_usuario = document.getElementById("usuario_validacao").value;
    let receber_email = document.getElementById("email_validacao").value;
    let receber_dataNasc = document.getElementById("dataNasc_validacao").value;
    let receber_telefone = document.getElementById("telefone_validacao").value;
    let receber_cpf = document.getElementById("cpf_validacao").value;
    let receber_cnpj = document.getElementById("cnpj_validacao").value;
    let receber_senha = document.getElementById("senha_validacao").value;
    let receber_confSenha = document.getElementById("confSenha_validacao").value;
    let receber_opcaoCPF = document.getElementById('escolha_cpf');
    let receber_opcaoCNPJ = document.getElementById('escolha_cnpj');

    let formato_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    let confirmacao = false;

    if(receber_confSenha != receber_senha){
        senha_validacao.classList.add('Incorreto');
        senha_validacao.classList.remove('Correto');

        confSenha_validacao.classList.add('Incorreto');
        confSenha_validacao.classList.remove('Correto');
    }
    else if(receber_confSenha == "" || receber_senha == ""){
        senha_validacao.classList.add('Incorreto');
        senha_validacao.classList.remove('Correto');

        confSenha_validacao.classList.add('Incorreto');
        confSenha_validacao.classList.remove('Correto');
    }
    else{
        senha_validacao.classList.add('Correto');
        senha_validacao.classList.remove('Incorreto');

        confSenha_validacao.classList.add('Correto');
        confSenha_validacao.classList.remove('Incorreto');
    }
    //ARRUMAR A VERIFICAÇÃO DO EMAIL!
    if(email_mascara.value.match(formato_email) == null || receber_usuario == "" || receber_email == "" || (receber_opcaoCPF.checked && (receber_dataNasc == "" || receber_cpf == "")) || (receber_opcaoCNPJ.checked && receber_cnpj=="") || (!receber_opcaoCPF.checked && !receber_opcaoCNPJ.checked) || receber_telefone == "" || receber_senha == "" || receber_confSenha == ""  || receber_senha!= receber_confSenha){
        let containerAlerta = document.querySelector(".containerAlerta");
        containerAlerta.style.visibility = 'visible';
        
        if(receber_usuario == ""){
            usuario_validacao.style.borderColor = 'red';
        }
        if(receber_email == ""){
            email_validacao.style.borderColor = 'red';
        }
        if(receber_telefone == ""){
            telefone_validacao.style.borderColor = 'red';
        }

        if(receber_opcaoCPF.checked){
            if(receber_cpf == ""){
                cpf_validacao.style.borderColor = 'red';
            }
            if(receber_dataNasc == ""){
                dataNasc_validacao.style.borderColor = 'red';
            }
        }
        else if (receber_opcaoCNPJ.checked) {
            if(receber_cnpj == ""){
                cnpj_validacao.style.borderColor = 'red';
            }
        }
        else{
            container_escolha.classList.add("escolha_nao_realizada");
        }

        if(receber_senha == ""){
            senha_validacao.style.borderColor = 'red';
        }
        if(receber_confSenha == ""){
            confSenha_validacao.style.borderColor = 'red';
        }
        if(email_mascara.value.match(formato_email) == null){
            email_validacao.style.borderColor = 'red';
        }
    }
    else if(usuario_validacao.value.length >= 5 && email_mascara.value.match(formato_email) && telefone_mascara.value.length === 16 && ((dataNasc_validacao.value != "" &&cpf_mascara.value.length === 14) || cnpj_mascara.value.length === 18) && (receber_opcaoCPF.checked || receber_opcaoCNPJ.checked) && senha_validacao.value.length >= 5 && confSenha_validacao.value.length >= 5 && receber_confSenha == receber_senha)
    {
        tipo_codCadastro=0;

        if(receber_opcaoCPF.checked) {
            tipo_codCadastro = 'cpf';
        }
        else if (receber_opcaoCNPJ.checked){
            tipo_codCadastro = 'cnpj';
        }

        confirmacao = true;
        var dados = {
            usuario: receber_usuario,
            email: receber_email,
            dataNasc: receber_dataNasc,
            telefone: receber_telefone,
            cpf: receber_cpf,
            cnpj: receber_cnpj,
            senha: receber_confSenha,
            confirmacaoJS: confirmacao,
            tipoDocumento: tipo_codCadastro
        }
        enviarDadosParaPHP(dados);
    }
}

function confirmacao_alerta(){
    let containerAlerta = document.querySelector(".containerAlerta");
    containerAlerta.style.visibility = 'hidden';
}

function enviarDadosParaPHP(dados) {
    fetch('PHP_intermediarios/cadastro_dados_vendedor.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        processarResposta(data);
        console.log(data);
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

function processarResposta(data) {
    if (!data){
        alert("E-mail já cadastrado, tente outro e-mail.");
    }
    else{
        alert('Cadastro realizado');
        window.location.href = 'login_vendedor.php';
    }
}
