<?php 
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<body>
    <?php
    include_once 'compra_resumo_dados.php';
    // if (session_status() == PHP_SESSION_NONE) {
    //     session_start();
    // }
    $compra_resumo_dados = new compra_resumo_dados();
    ?>

    <div class="card-produto">
        <div class="container-img-produto">
            <img src="imagens/<?php echo $compra_resumo_dados->img_produto ?>" alt="imagem do produto" id="img-produto">
        </div>
        <div class="container-texto">
            <p>Nome do produto: <?php echo $compra_resumo_dados->nome_produto ?></p>
            <p>Preço: R$<span class="textos-span"><?php echo $compra_resumo_dados->valor_produto ?></span></p>
            <p>Quantidade comprada: <span class="textos-span">1</span> unidade(s)</p>
        </div>
    </div>
</body>