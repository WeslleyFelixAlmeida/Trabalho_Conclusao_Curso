<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<body>
    <?php
        // if (session_status() == PHP_SESSION_NONE){
        //     session_start();
        // }
        include_once "perfil_vendedor_cards_dados.php";
        $perfil_vendedor_cards_dados = new perfil_vendedor_cards_dados();
    ?>
    <div class="primeiroItemCD">
        <div class="top_primeiroItemCD">
            <div class="status_produto_01">
                <p>Produto</p>
                <p class="produto_01"></p>
            </div>
            <div class="situacao_entrega_p_01">
                <p>Adicionado dia: </p>
                <p class="produto_01">16/02/23</p>
            </div>
        </div>
        <div class="inf_primeiroItemCD">
            <img src="imagens/<?php echo $perfil_vendedor_cards_dados->produto_atual_info[3].'.'.$perfil_vendedor_cards_dados->produto_atual_info[4]?>" class="img_produto">
            <p><?php echo $perfil_vendedor_cards_dados->produto_atual_info[0]?></p>
            <p>Valor: <?php echo $perfil_vendedor_cards_dados->produto_atual_info[2]?></p>
        </div>
    </div>
</body>
