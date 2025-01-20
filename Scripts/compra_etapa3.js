function etapa_compra1(id_produto){
    window.location.href = `compra_etapa1.php?id=${id_produto}`;
}

function etapa_compra2(id_produto){
    window.location.href = `compra_etapa2.php?id=${id_produto}`;
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
    if(confirm("Deseja finalizar compra?")){
        alert("Compra realizada!");
        let dados = {
            confirmacao: true,
        };
        enviarDadosParaPHP(dados);
        resumo_compra(1);
    }
}

function enviarDadosParaPHP(dados) {
    fetch('PHP_intermediarios/compra_finalizar.php', {
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

function resumo_compra(idcompra){
    window.location.href = `compra_resumo.php?idcompra=${idcompra}`;
}