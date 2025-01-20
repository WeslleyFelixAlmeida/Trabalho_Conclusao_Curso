<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
    <link rel="stylesheet" href="Styles/compra_etapa3.css">
     <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
     <link rel="shortcut icon" href="imagens/favicon.ico" />

</head>
<body>
    <div style="display: none;">
        <?php echo $_SESSION["pagamento"]; ?>
        <!-- Esta div serve para não acontecer conflitos na variavel session["pagamento"]! -->
    </div>
    <?php
        include 'Classes_paginas/compra_etapa3_class.php';
    ?>
    <header>
        <div class="container_header">
            <div class="header_esquerda">
                <div class="container_logo">
                    <a href="index.php"><img src="imagens/imagens_index/logo.png" alt="logo" id="logo"></a>
                </div>
            </div>
            <div class="container_barra">
            </div>
            <div class="header_direita">
                <div class="container_perfil">
                    <a href="perfil.php">
                        <div class="perfil_link">
                            <img src="imagens/imagens_index/icone branco.png" alt="perfil" id="perfil_icone">
                            <p><?php echo $_SESSION["usuario"];?></p>
                        </div>
                    </a>
                </div>
                <div class="container_carrinho">

                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container_main">
            <div class="itens_internos_main">
                <div class="produtos">
                    <div class="produtos_cards">
                        <?php
                            $compra_etapa3_class->apresentar_produtos();
                        ?>
                    </div>
                    <div class="dados_cliente">
                        <p>Dados do cliente</p>
                        <p>Nome:</p>
                        <p><?php echo $_SESSION["nome"];?></p>
                        <p>CPF:</p>
                        <p><?php echo $_SESSION["cpf_comprador"];?></p><?php ?>
                    </div>
                </div>
                <div class="container_lateral_esquerda">
                    <div class="container_central">
                        <div class="container_endereco_entrega">
                            <p>Endereço de entrega:</p>
                            <p><?php echo $_SESSION["endereco_completo"];?></p>
                            <P>Valor frete:</P>
                            <p>R$<?php echo $_SESSION['valor_frete']?></p>
                        </div>
                        <div class="escolha_pagamento">
                            <p>Tipo de pagamento escolhido:</p>
                            <div class="container_img_pagamento">
                                <img src="imagens/imagens_produto_especifico/<?php echo $_SESSION["img_pagamento"];?>" class="img_pagamento" alt="logo pagamento">
                            </div>
                        </div>
                    </div>

                    <div class="container_resumo">
                        <p>Preço final:</p>
                        <p>
                            <?php
                                echo $_SESSION["valor"];
                            ?> Reais</p>
                    </div>
                </div>
            </div>
            <div class="botoes">
                <input type="button" value="Voltar" onclick="etapa_compra2()">
                <input type="button" value="Finalizar compra" onclick="finalizar_compra()">
            </div>
        </div>
    </main>
    <footer>
        <div class="links_footer_container">
            <ul class="links_footer">
                <li><a href="sobre_nos.php">Sobre nos</a></li>
                <li><a href="privacidade.php">Politica de privacidade</a></li>
                <li><a href="contatos.php">Contatos</a></li>
                <li><a href="estados_atuacao.php">Estados de atuação</a></li>
            </ul>
        </div>
        <div class="copyright_texto">
            <p>&copy;Blossom's Wine</p>
            <p>Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="Scripts/compra_etapa3.js"></script>
</body>
</html>