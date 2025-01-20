function navegar(){
    let email_campo = document.getElementById("emailLogin").value;
    let senha_campo = document.getElementById("senhaLogin").value;
    if (email_campo == "" || senha_campo == ""){
        alert("Existem campos vazios");
    }
    else{
        let dados = {
        email: email_campo,
        senha: senha_campo,
        tipoConta: 'vendedor',
        }
        enviarDadosParaPHP(dados);  
    }

}

function confirmacao_alerta(){
    let containerAlerta = document.querySelector(".containerAlerta");
    containerAlerta.style.visibility = 'hidden';
}

function enviarDadosParaPHP(dados) {

    fetch('PHP_intermediarios/login_dados_vendedor.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(retornoPHP => {
        processarResposta(retornoPHP);
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

function processarResposta(dados) {
    console.log(dados);
    if (dados){
        window.location.href = "index.php";
    }
    else{
         alert("A conta não existe ou há informações incorretas.");
    }
}