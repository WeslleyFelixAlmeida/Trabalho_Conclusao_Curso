<?php 
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    include_once "perfil_dados.php";
    $perfil_dados = new perfil_dados();
    if($_SESSION["QTND_produtos"] < 1){
        $perfil_dados->infos_produto[5] = "";
        $perfil_dados->infos_produto[7] = "";
        $perfil_dados->infos_produto[1] = "";
        $perfil_dados->valor = "";
    }
?>
<body>
<div class="primeiroItemCD">
    <div class="top_primeiroItemCD">
        <div class="status_produto_01">
            <p>Status: </p>
            <p class="produto_01">Recebido</p>
        </div>
        <div class="situacao_entrega_p_01">
            <p>Entregue dia: </p>
            <p class="produto_01">16/02/23</p>
        </div>
    </div>
    <div class="inf_primeiroItemCD">
        <img src="imagens/<?php echo "".$perfil_dados->infos_produto[5].".".$perfil_dados->infos_produto[7]."";?>" alt="" class="img_produto">
        <p><?php echo $perfil_dados->infos_produto[1];?></p>
        <p>Valor: R$<?php echo $perfil_dados->valor;?></p>
    </div>
</div>
</body>