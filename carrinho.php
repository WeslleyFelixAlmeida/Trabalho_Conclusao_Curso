<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="Styles/carrinho.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />

</head>

<body>
    <?php
    include 'Classes_paginas/carrinho_class.php';
    ?>
    <header>
        <div class="container_header">
            <div class="header_esquerda">
                <div class="container_logo">
                    <a href="index.php"><img src="imagens/imagens_index/logo.png" alt="logo" id="logo"></a>
                </div>
                <div class="container_logo_pequena">
                    <a href="index.php"><img src="imagens/logo_01.png" alt="logo" id="logo_pequena"></a>
                </div>
            </div>
            <div class="container_barra">
                <input type="text" name="barra_pesquisa" id="barra_pesquisa" placeholder="Pesquise um produto">
                <img src="imagens/imagens_index/lupa.png" alt="pesquisar" id="img_lupa">
            </div>
            <div class="mostrar_links_header" onclick="mostrar_links_header()">
                <img src="imagens/mostrar_link_icone.png" alt="mostrar links icone" id="mostrar_link_icone">
            </div>
            <div class="header_direita">
                <div class="container_login" <?php echo $Carrinho->login ?>>
                    <div class="login_link">
                        <div class="container-img-texto">
                            <img src="imagens/imagens_index/icone branco.png" alt="perfil" id="perfil_icone">
                            <p>Fazer login</p>
                        </div>
                        <div class="tipoLogin">
                            <a href="login_cliente.php" id="cliente-login">Entrar como cliente</a>
                            <a href="login_vendedor.php" id="vendedor-login">Entrar como Vendedor</a>
                        </div>
                    </div>
                </div>
                <div class="container_perfil" <?php echo $Carrinho->perfil ?>>
                    <a href="<?php echo $Carrinho->URL_perfil; ?>">
                        <div class="perfil_link">
                            <img src="imagens/imagens_index/icone branco.png" alt="perfil" id="perfil_icone">
                            <p><?php echo $_SESSION["usuario"]; ?></p>
                        </div>
                    </a>
                </div>
                <div class="container_carrinho">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-centro">
            <div class="centro-esquerda">
                <a href="index.php">Voltar</a>
                <h1>Produtos adicionados:</h1>
                <div class="container-card-produto">
                    <?php
                    $Carrinho->apresentar_produtos();
                    ?>
                </div>
            </div>
            <div class="centro-direita">
                <div class="informacoes-gerais">
                    <p>Preço total: R$<span><?php echo $_SESSION['preco_total']; ?></span></p>
                    <p>Quantidade de produto <span>1</span> unidade(s)</p>
                    <div class="botoes">
                        <input type="button" value="Comprar" onclick="comprar_carrinho(<?php echo $_SESSION['compra_carrinho']; ?>)">
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
    <script src="Scripts/carrinho.js"></script>
</body>

</html>