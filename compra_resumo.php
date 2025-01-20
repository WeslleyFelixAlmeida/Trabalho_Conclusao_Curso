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
    <link rel="stylesheet" href="Styles/resumo.css">
     <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
     <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
    include 'Classes_paginas/compra_resumo_class.php';
    $compra_resumo_class->apresentar_boleto();
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
                            <p>Usuario 1</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <a href="index.php" id="link-voltar">Voltar ao início</a>
        <div class="container-main">
            <div class="container-infos-compra">
                <div class="infos-compra">
                <div class="container-texto-info">
                    <h1>Informações da compra: 
                        <span class="textos-span">
                            <?php echo $_SESSION['codigo_compra'];?>  
                        </span>
                    </h1>
                    <p>Preço total: R$<span class="textos-span">
                        <?php 
                        echo $_SESSION['preco_total'];
                        echo $_SESSION['valor_frete'];
                        ?>
                    </span></p>
                    <p>Frete total: R$<span class="textos-span"><?php echo $_SESSION['valor_frete']?></span></p><!--ADD depois-->
                </div>
                    <div class="container-cards">
                        <?php 
                            $compra_resumo_class->apresentar_produtos();
                        ?>
                    </div>
                </div>
                <a href="#" style="display: <?php echo $compra_resumo_class->display?>;">
                    <div class="link-boleto">
                        <p>Clique aqui para gerar o boleto de pagamento</p>
                        <img src="imagens/imagens_produto_especifico/boleto_logo.png" alt="imagem boleto">
                    </div>
                </a>
                
                <div class="container-lateral-direita">
                    <div class="container-logo-secundaria">
                        <img src="imagens/logo_01.png" alt="logo-secundaria" id="logo-secundaria">
                    </div>
                    <div class="texto-lateral-direita">
                        <p>Agradecemos pela compra.</p>
                        <p id="nome-empresa">-Blossom's Wine</p>
                        <div class="mensagem">
                            <p>E lembre-se, se beber não dirija!</p>
                            <p>lei nº 9.503, de 23 de SETEMBRO de 1997</p>
                        </div>
                    </div>
                </div>
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

    <script src="Scripts/resumo.js"></script>
</body>
</html>