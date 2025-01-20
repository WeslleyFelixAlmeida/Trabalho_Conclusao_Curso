function navegar_perfil(){
    window.location.href = 'perfil.php';
}

function navegarHome(){
    window.location.href = 'index.php';
}


function mudarUsuario(){
    let usuario_novo = document.getElementById("usuario_novo").value;
    var dados = {
        usuario: usuario_novo,
    }
    if(usuario_novo == ""){
        alert("Novo usuário inválido! Tente novamente");
    }
    else{
        if(confirm("Você tem certeza que quer mudar de seu nome de usuário?")){
            enviarDadosParaPHP(dados);
            location.reload(); 
            alert("Nome de usuário alterado!");
        }
    }
}

function enviarDadosParaPHP(dados) {
    console.log(dados);
    fetch('PHP_intermediarios/privacidade_dados.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(retornoPHP => {
        //processarResposta(retornoPHP, dados["pag"]);
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}