<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    include_once 'cards_etapa3_dados.php';
    $cards_etapa3_dados = new cards_etapa3_dados();
?>
<div class="container_infos_produto">
    <div class="container_img">
        <img src="imagens/<?php echo $cards_etapa3_dados->url_img?>" class="imagemProduto" alt="Imagem produto">
    </div>
    <div class="texto_produtos">
        <p><?php echo $cards_etapa3_dados->info_produto[1];?></p>
        <p>R$
            <?php
                echo $cards_etapa3_dados->info_produto[4];
            ?>
        </p>
    </div>
</div>