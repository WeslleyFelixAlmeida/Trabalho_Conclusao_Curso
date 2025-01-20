function navegarHome(){
    window.location.href = 'index.php';
}

function navegarPerfil(){
    window.location.href = 'perfil_vendedor.php';
}

const input_img = document.querySelector('#input_img'); 
input_img.addEventListener('change', function(e){
    const img_adicionada =  e.target || window.event.srcElement;

    const arquivos = img_adicionada.files;

    const leitorArquivos = new FileReader();

    leitorArquivos.onload = function (){
    document.querySelector('#img_card').src = leitorArquivos.result;
    document.querySelector('#img_card_grande').src = leitorArquivos.result;
    }
    
    leitorArquivos.readAsDataURL(arquivos[0]);
});

let nome_produto = document.getElementById("nome_prod_novo");
nome_produto.addEventListener('input', ()=>{
    let nome_produto_card = document.getElementById("nome_produto");
    let nome_produto_espec = document.getElementById("nome_produto_espec");
    nome_produto_card.innerHTML = `${nome_produto.value}`;
    nome_produto_espec.innerHTML = `${nome_produto.value}`;
});

let descricao_produto = document.getElementById("desc_produto");
descricao_produto.addEventListener('input', ()=>{
    let desc_produto_add = document.getElementById('desc_produto_add');
    desc_produto_add.innerHTML = `${descricao_produto.value}`;
});

let preco_int_parte = document.getElementById("preco_int_parte");
preco_int_parte.addEventListener('input', ()=>{
    let preco_int_grande = document.querySelector('#preco_int_grande');
    let preco_int_card = document.querySelector('#preco_int_card');

    preco_int_grande.innerHTML = `${preco_int_parte.value}`;
    preco_int_card.innerHTML = `${preco_int_parte.value}`;
});

let preco_dec_parte = document.getElementById("preco_dec_parte");
preco_dec_parte.addEventListener('input', ()=>{
    let preco_dec_grande = document.querySelector('#preco_dec_grande');
    let preco_dec_card = document.querySelector('#preco_dec_card');

    preco_dec_grande.innerHTML = `${preco_dec_parte.value}`;
    preco_dec_card.innerHTML = `${preco_dec_parte.value}`;
});

preco_int_parte.addEventListener('keypress', (tecla) =>{
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
});

preco_dec_parte.addEventListener('keypress', (tecla) =>{
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
});

let escolha_volume = document.getElementById("escolha_volume");
escolha_volume.addEventListener('change', ()=>{
    let unidade_medida_produto = document.getElementById('unidade_medida_produto');
    unidade_medida_produto.innerHTML = `${escolha_volume.value}`;
})

document.addEventListener('DOMContentLoaded' ,()=>{
    let unidade_medida_produto = document.getElementById('unidade_medida_produto');
    unidade_medida_produto.innerHTML = `${escolha_volume.value}`;
});

let volume_produto = document.getElementById('volume_produto');
volume_produto.addEventListener('input', ()=>{
    let valor_int_volume = document.getElementById('valor_int_volume');
    valor_int_volume.innerHTML = `${volume_produto.value}`;
});
volume_produto.addEventListener('keypress', (tecla) =>{
    let teclaPressionada = tecla.key;

    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
});


let QNTD_produto = document.getElementById('QNTD_produto');
QNTD_produto.addEventListener('keypress' ,(tecla) =>{
    let teclaPressionada = tecla.key;
    if (!/[0-9]/.test(teclaPressionada)) {
        tecla.preventDefault();
        return;
    }
});

QNTD_produto.addEventListener('input', ()=>{
    let quantidade_estoque_produto = document.getElementById('quantidade_estoque_produto');
    quantidade_estoque_produto.innerHTML = `${QNTD_produto.value}`;
});


const form = document.querySelector('form');
form.addEventListener('submit', async event =>{
    // console.log(form);
    event.preventDefault();
    const formData = new FormData(form);

    const data = await fetch('PHP_intermediarios/vender_produtos_dados.php',{
        method: 'POST',
        mode: 'cors',
        body: formData
    }
    );
    const response = await data.json();

    verificarCampos(response);
});

function verificarCampos(resposta){
    if(resposta == true){
        window.location.href = "perfil_vendedor.php";
        alert("Produto adicionado com sucesso!");
    }

    else{
        alert("Há campos vazios ou inválidos!");
    }
}