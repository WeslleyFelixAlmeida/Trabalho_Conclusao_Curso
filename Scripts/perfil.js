function navegarHome(){
    window.location.href = 'index.php';
}

function navegarEnderecos(){
    window.location.href = 'enderecos.php';
}

function navegarPrivacidade(){
    window.location.href = 'cliente_privacidade.php';
}

function navegarPerfil(){
    window.location.href = 'perfil.php';
}

function desconectar(){    
    let apagar_infos = {
        email: "",
        senha: "",
    }
    apagar_infos_cliente(apagar_infos);
    window.location.href = 'index.php';
}

function apagar_infos_cliente(dados){
    fetch('PHP_intermediarios/login_dados.php', {
        method: 'POST',
        body: JSON.stringify(dados),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .catch(error => {
        console.error('Erro:', error);
    });
}