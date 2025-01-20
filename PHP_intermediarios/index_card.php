<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<body>
    <?php
        include_once "info_produto.php";
        $informacao = new informacoes_produto();
    ?>
    <a href="produto_especifico.php?id=<?php echo $informacao->id;?>">
        <div class="card_cont_1">
                <div class="container_img_card">
                    <img src="imagens/<?php echo "$informacao->img_produto".".$informacao->tipo_img";?>" alt="imagem" class="img_card">
                </div>
                <div class="container_txt_card">
                    <p id="nome_produto"><?php echo $informacao->nome_produto?></p>
                    <div class="avaliacao_01">
                        <input type="radio" name="" id="estrela_01" class="estrelas_avaliacao">
                        <label for="estrela_01" class="estrela"></label>
                        <input type="radio" name="" id="estrela_02" class="estrelas_avaliacao">
                        <label for="estrela_02" class="estrela"></label>
                        <input type="radio" name="" id="estrela_03" class="estrelas_avaliacao">
                        <label for="estrela_03" class="estrela"></label>
                        <input type="radio" name="" id="estrela_04" class="estrelas_avaliacao">
                        <label for="estrela_04" class="estrela"></label>
                        <input type="radio" name="" id="estrela_05" class="estrelas_avaliacao">
                        <label for="estrela_05" class="estrela"></label>
                    </div>
                    <p id="valor_antigo">De: R$ 00.00</p>
                    <p id="valor_atual">Por: R$ <?php echo $informacao->preco_produto?></p>
                    <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
            </div>
        </div>
    </a>
</body>
</html>
