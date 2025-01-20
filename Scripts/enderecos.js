function navegarPerfil(){
    window.location.href = 'perfil.php';
}

function navegarHome(){
    window.location.href = 'index.php';
}

var endereco_01 = []
var endereco_02 = []
var endereco_03 = []

endereco_01[0] = "Avenida das Flores, 123, Jardim Primavera, São Paulo (SP), 12345-678";
endereco_01[1] = "45";
endereco_01[2] = "Apartamento";
endereco_01[3] = "Próximo à Praça Centra";

endereco_02[0] = "Rua das Araras, 567, Vila Verde, Rio de Janeiro (RJ), 23456-789";
endereco_02[1] = "25";
endereco_02[2] = "Casa";
endereco_02[3] = "Ao lado da Escola Santa Clara";

endereco_03[0] = "Travessa das Estrelas, 890, Centro Histórico, Minas Gerais (MG), 34567-890";
endereco_03[1] = "Sala 301";
endereco_03[2] = "Prédio empresarial";
endereco_03[3] = "Prédio de Pedra na Praça Principal";

var rua_01 = document.getElementById("rua_01");
var numero_01 = document.getElementById("numero_01");
var complemento_01 = document.getElementById("complemento_01");
var ponto_ref_01 = document.getElementById("ponto_ref_01");

rua_01.textContent = `${endereco_01[0]}`;
numero_01.textContent = `${endereco_01[1]}`;
complemento_01.textContent = `${endereco_01[2]}`;
ponto_ref_01.textContent = `${endereco_01[3]}`;


var rua_02 = document.getElementById("rua_02");
var numero_02 = document.getElementById("numero_02");
var complemento_02 = document.getElementById("complemento_02");
var ponto_ref_02 = document.getElementById("ponto_ref_02");

rua_02.textContent = `${endereco_02[0]}`;
numero_02.textContent = `${endereco_02[1]}`;
complemento_02.textContent = `${endereco_02[2]}`;
ponto_ref_02.textContent = `${endereco_02[3]}`;


var rua_03 = document.getElementById("rua_03");
var numero_03 = document.getElementById("numero_03");
var complemento_03 = document.getElementById("complemento_03");
var ponto_ref_03 = document.getElementById("ponto_ref_03");

rua_03.textContent = `${endereco_03[0]}`;
numero_03.textContent = `${endereco_03[1]}`;
complemento_03.textContent = `${endereco_03[2]}`;
ponto_ref_03.textContent = `${endereco_03[3]}`;