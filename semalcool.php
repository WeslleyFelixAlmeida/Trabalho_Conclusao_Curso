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
    <title>Bebidas sem álcool</title>
    <link rel="stylesheet" href="Styles/semalcool.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
        include 'Classes_paginas/semalcool_class.php';
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
                    <div class="container_login" <?php echo $Semalcool->login?>>
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
                    <div class="container_perfil" <?php echo $Semalcool->perfil?>>
                        <a href="<?php echo $Semalcool->URL_perfil;?>">
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
        <section class="lateral-esquerda" id="lateral-esquerda">
            <div class="container-filtro">
                <div class="topo_container_filtro" onclick="apresentar_filtro()">
                    <h1>Filtros</h1>
                    <img src="imagens/alfinete_img.png" alt="Filtro imagem icone" id="alfinete_img">
                </div>
                <div class="tipos_produto">
                    <h1>Filtre pelos tipos de bebidas sem álcool:</h1>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="vinhos">Cervejas sem álcool</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="vinhos">Cervejas sem álcool</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="vinhos">Cervejas sem álcool</label>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">
                        <label for="vinhos">Cervejas sem álcool</label>
                    </div>
                </div>
            </div>
            <!-- top-lateral-esquerda -->
        </section>
        <div class="grade_produtos">
            <a href="index.php" id="link-voltar">Voltar</a>
            <div class="linha-grade">
                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="linha-grade">
                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="linha-grade">
                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="linha-grade">
                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card_cont_1">
                            <div class="container_img_card">
                                <img src="imagens/imagens_produtos/1.png" alt="imagem" class="img_card">
                            </div>
                            <div class="container_txt_card">
                                <p id="nome_produto">Vinho branco</p>
                                <div class="avaliacao_01">
                                    <p class="estrelas" id="estrela_1">★</p>
                                    <p class="estrelas" id="estrela_2">★</p>
                                    <p class="estrelas" id="estrela_3">★</p>
                                    <p class="estrelas" id="estrela_4">★</p>
                                    <p class="estrelas" id="estrela_5">★</p>
                                </div>
                                <p id="valor_antigo">De: R$ 00.00</p>
                                <p id="valor_atual">Por: R$ 39,99</p>
                                <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </a>
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
    <script src="Scripts/semalcool.js"></script>
</body>
</html>