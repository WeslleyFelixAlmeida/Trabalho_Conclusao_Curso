function navegarHome(){
    window.location.href = 'index.php';
}

function navegarVenderProdutos(){
    window.location.href = 'vender_produtos.php';//mudar depois para .php
}

function navegarPrivacidade(){
    window.location.href = 'privacidade_vendedor.php';// mudar depois para .php
}

function navegarPerfil(){
    window.location.href = 'perfil.php';
}

function desconectar(){    
    let apagar_infos = {
        email: "",
        senha: "",
    }
    apagar_infos_vendedor(apagar_infos);
    window.location.href = 'index.php';
}

function apagar_infos_vendedor(dados){
    fetch('PHP_intermediarios/login_dados_vendedor.php', {
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