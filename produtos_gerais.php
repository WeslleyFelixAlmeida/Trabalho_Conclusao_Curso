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
    <title>Produtos</title>
    <link rel="stylesheet" href="Styles/produtos_gerais.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
        include 'Classes_paginas/produtos_gerais_class.php';
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
                    <div class="container_login" <?php echo $Produtos_gerais->login?>>
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
                    <div class="container_perfil" <?php echo $Produtos_gerais->perfil?>>
                        <a href="<?php echo $Produtos_gerais->URL_perfil;?>">
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
    </header>
    <main>
        <section class="lateral-esquerda" onclick="apresentarFiltros()">
            <div class="top-lateral-esquerda">
                <h1>Filtros</h1>
                <p>Filtre por categorias os produtos que você busca:</p>
            </div>

            <div class="tipos_produto">
                <h1>Filtre pelos tipos de bebida:</h1>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Vinhos</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Úisques</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Espumantes</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Diversos</label>
                </div>
            </div>

            <div class="tipos_produto">
                <h1>Filtre pelos tipos de Úisques:</h1>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Whisky Scotch</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Whisky Irlandês</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Whisky Americano</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Whisky Japonês</label>
                </div>
            </div>

            <div class="tipos_produto">
                <h1>Filtre pelos tipos Espumantes:</h1>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Nature</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Exta-brut</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Brut</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Sec, ou seco</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Demi-sec</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Doce</label>
                </div>
            </div>

            <div class="tipos_produto">
                <h1>Filtre pelos tipos diversos:</h1>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Cervejas</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Águas</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Sucos</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="">
                    <label for="vinhos">Bebidas sem álcool</label>
                </div>
            </div>

        </section>

        <div class="container_main">
            <div class="container-top-main">
                <a href="index.php" id="link-voltar" title="Voltar para a página inicial">Voltar</a>
                <div class="botoes-top">
                    <button type="button" id="botao-lista" class="botoes" title="Produtos em lista"><img class="img_button" src="imagens/linha_img.png" alt="" onclick="modelagem_lista()"></button>
                    <button type="button" id="botao-grade" class="botoes" title="Produtos em grade"><img class="img_button" src="imagens/grade_img.png" alt="" onclick="modelagem_grade()"></button>
                </div>
            </div>
            <div class="grade_produtos">
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

    <script src="Scripts/produtos_gerais.js"></script>
</body>
</html>
