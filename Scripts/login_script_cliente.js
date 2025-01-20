function navegar(pagina){
    let email_campo = document.getElementById("emailLogin").value;
    let senha_campo = document.getElementById("senhaLogin").value;
    if (email_campo == "" || senha_campo == ""){
        alert("Existem campos vazios");
    }
    else{
        let dados = {
        email: email_campo,
        senha: senha_campo,
        pag: pagina,
        tipoConta: 'cliente',
        }
        enviarDadosParaPHP(dados);  
    }

}

function confirmacao_alerta(){
    let containerAlerta = document.querySelector(".containerAlerta");
    containerAlerta.style.visibility = 'hidden';
}

function enviarDadosParaPHP(dados) {

    fetch('PHP_intermediarios/login_dados.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(retornoPHP => {
        processarResposta(retornoPHP, dados["pag"]);
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

function processarResposta(dados, pagina) {
    if (dados){
        if(pagina != ""){
            window.location.href = `${pagina}`;
        }
        else{
            window.location.href = "index.php";
        }
    }
    else{
        alert("A conta não existe ou há informações incorretas.");
    }
}