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
    <title>Home</title>
    <link rel="stylesheet" href="Styles/index.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php        
        include 'Classes_paginas/index_class.php';
    ?>
    <header>
        <div class="container_header">
            <div class="header_esquerda">
                <div class="container_logo">
                    <img src="imagens/imagens_index/logo.png" alt="logo" id="logo">
                </div>
                <div class="container_logo_pequena">
                    <img src="imagens/logo_01.png" alt="logo" id="logo_pequena">
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
                    <div class="container_login" <?php echo $Index->login?>>
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
                    <div class="container_perfil" <?php echo $Index->perfil?>>
                        <a href="<?php echo $Index->URL_perfil;?>">
                            <div class="perfil_link">
                                <img src="imagens/imagens_index/icone branco.png" alt="perfil" id="perfil_icone">
                                <p><?php echo $_SESSION["usuario"];?></p>
                            </div>
                        </a>
                    </div>
                    <div class="container_carrinho">
                        <a href="carrinho.php">
                            <img src="imagens/imagens_index/carrinho branco.png" alt="carrinho" id="carrinho_icone">
                        </a>
                    </div>
            </div>
        </div>
            <div class="todas_categorias" onclick="todas_categorias()">
                <p>Todas as categorias</p>
            </div>
            <div class="categorias_container">
                <nav class="categorias">
                    <ul>
                        <li><a href="produtos_gerais.php">Todos os produtos</a></li>
                        <li><a href="Espumantes.php">Espumantes</a></li>
                        <li><a href="cervejas.php">Cervejas</a></li>
                        <li><a href="semalcool.php">Bebidas sem álcool</a></li>
                        <li><a href="uisques.php">Úisques</a></li>
                    </ul>
                </nav>
            </div>
    </header>
    <main>
        <div class="container_main">
            <div class="container_produto_01">
                <img src="imagens/imagens_index/img1.webp" alt="produto" class="produto_img_01">
            </div>
            <div class="container_cards_1">
                <?php
                    for($i = 1; $i < 5; $i++){
                        $_SESSION['id_produto'] = $i;
                        include "PHP_intermediarios/index_card.php";
                    }
                ?>
            </div>

            <div class="container_produto_02">
                <img src="imagens/imagens_index/img2.jpg" alt="produto" class="produto_img_02">
            </div>

            <div class="container_cards_2">
                <?php
                    for($i = 5; $i < 13; $i++){
                        $_SESSION['id_produto'] = $i;
                        include "PHP_intermediarios/index_card.php";
                    }
                ?> 
                <input type="button" value="<" id="carrosel_botao_esquerda" onclick="carrossel_esquerda()">
                <input type="button" value=">" id="carrosel_botao_direita" onclick="carrossel_direita()">
            </div>

            <div class="container_marcas">
                <div class="marcas_container_imgs">
                    <img src="imagens/imagens_index/marca_1-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_2-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_4-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_3-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_2-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_1-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_1-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_2-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_4-removebg-preview.png" alt="marcas" class="marcas_img">
                    <img src="imagens/imagens_index/marca_3-removebg-preview.png" alt="marcas" class="marcas_img">
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
    <script src="Scripts/index.js"></script>
</body>
</html>