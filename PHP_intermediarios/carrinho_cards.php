<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }    
    include_once "dados_produtos_carrinho.php";
    $dados = new dados_produtos_carrinho();
    // echo $_SESSION['produto_remover'];
?>

<div class="card-produto">
    <div class="container-img">
        <img src="imagens/<?php echo $dados->img_produto;?>" alt="Imagem do produto" id="img-produto">
    </div>
    <div class="container-texto">
        <p><?php echo $dados->informacoes_produto[1];?></p>
        <p>Preço: R$
            <span>
                <?php echo $dados->informacoes_produto[4];?>
            </span>
        </p>
        <label for="quantidade">Quantidade: 1</label>
    </div>
    <div class="container-botao">
        <input type="button" value="Remover produto" onclick="removerProduto(<?php echo $_SESSION['produto_remover']?>)">
    </div>
</div>