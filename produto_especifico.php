<?php   
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    include 'Classes_paginas/produto_especifico_class.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Produto_especifico->infos_produto[1];?></title>
    <link rel="stylesheet" href="Styles/produto_especifico.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
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
                    <div class="container_login" <?php echo $Produto_especifico->login?>>
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
                    <div class="container_perfil" <?php echo $Produto_especifico->perfil?>>
                        <a href="<?php echo $Produto_especifico->URL_perfil;?>">
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
    <a href="index.php" id="link_index">Voltar</a>
    <main>
        <div class="container_main">
            <div class="container_main_topo">
                <div class="main_esquerda">
                    <div class="container_img">
                        <img src="imagens/<?php echo $Produto_especifico->url_img;?>" alt="imagem do produto" id="produto_especifico">
                    </div>
                </div>
                <div class="main_direita">
                    <div class="informacoes_produto">
                        <p class="nome_produto"> 
                            <?php
                                echo $Produto_especifico->infos_produto[1];
                            ?>
                        </p>
                        <div class="container-top-grande">
                                    <div class="container-avaliacao-grande">
                                        <p>Avaliação média do produto:</p>
                                        <ul class="avaliacao_lista">
                                            <li>★</li>
                                            <li>★</li>
                                            <li>★</li>
                                            <li>★</li>
                                            <li>★</li>
                                        </ul>
                                    </div>
                                    <div class="container-top-grande-lateral">
                                        <div class="container-volume-grande">
                                            <p>Volume: <span id="volume-produto"><?php echo $Produto_especifico->infos_produto[6]?></span></p>
                                        </div>
                                        <div class="container-quantidade-grande">
                                            <p>Quantidade em estoque: <span id="quantidade_estoque_produto"><?php echo $Produto_especifico->infos_produto[8]?> unidade(s)</span></p>
                                        </div>
                                    </div>
                                </div>
                        <div class="desc_produto">
                            <p>Descrição do produto:</p>
                            <p>
                                <?php
                                    echo $Produto_especifico->infos_produto[2];
                                ?>
                            </p>
                            <div class="info_vendedor">
                            <p>Vendido por: <span class="informacoes_para_cliente"><?php echo $Produto_especifico->info_vendedor[1];?></span></p>
                        </div>
                        </div>

                    </div>
                    <div class="container_informacoes">
                        <label for="cep_cliente">Calcular frete:</label>
                        <input type="text" id="cep_cliente" placeholder="Insira o seu CEP" maxlength="10">
                        <input type="button" value="Calcular" onclick="exibirInfos()" id="botao_calculo_frete">
                        <div class="container_cep" id="container_cep">
                            <div class="cep_infos">
                                <p>Rua: <span class="informacoes_para_cliente"  id="rua_fornecida"></span></p>
                                <p>CEP: <span class="informacoes_para_cliente" id="cep_fornecido"></span></p>                            
                                <p>Valor: <span class="informacoes_para_cliente" id="valor_frete"></span></p>
                                <p>Chega dia: <span class="informacoes_para_cliente" id="data_entrega"></span></p>
                            </div>
                        </div>
                        <div class="meios_pagamento">
                            <div class="boleto">
                                <p>Pagar com boleto:</p>
                                <img src="imagens/imagens_produto_especifico/boleto_logo.png" alt="boleto" id="imagem_boleto">                            </div>
                            <div class="cartao">
                                <p>Pagar usando cartão:</p>
                                <img src="imagens/imagens_produto_especifico/american_express.png" class="cartoes_logo" alt="cartao">
                                <img src="imagens/imagens_produto_especifico/elo.png" class="cartoes_logo" alt="cartao">
                                <img src="imagens/imagens_produto_especifico/hipercard.png" class="cartoes_logo" alt="cartao">
                                <img src="imagens/imagens_produto_especifico/master_card.png" class="cartoes_logo" alt="cartao">
                                <img src="imagens/imagens_produto_especifico/visa.png" class="cartoes_logo" alt="cartao">
                            </div>
                        </div>
                        <p class="valor_final">Valor final: 
                            <span class="valor_final_preco" id="valor_final">
                                R$<?php
                                        echo $_SESSION["valor"];
                                    ?>
                            </span>
                        </p>
                    </div>
                    <div class="botoes_main_direita">
                        <input type="button" value="Comprar" onclick="comprar_pagina('<?php echo $Produto_especifico->url;?>')" style="display:<?php echo $Produto_especifico->permisao_conta?>">
                        <input style="display:<?php echo $Produto_especifico->permisao_conta?>" type="button" value="Adicionar ao carrinho" onclick="adicionar_prod_carrinho(<?php echo $_SESSION["Id_produto_atual"];?>)">
                    </div>
                </div>
            </div>    
            <div class="container_main_inferior">
                <div class="container_inf_header">
                    <p>Avaliações do produto</p>
                    <input type="button" value="Classificar por">
                </div>
                <div class="comentario">
                    <p>{NOME DO USUÁRIO}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate corporis praesentium placeat quos qui soluta natus dolore accusamus esse, saepe reiciendis eligendi asperiores hic ab impedit? Illo, nostrum unde?</p>
                    <ul class="avaliacao_lista">
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                    </ul>
                    <p>Usuário recomenda o produto: <span class="recomendacao">SIM</span></p>
                </div>
                <div class="comentario">
                    <p>{NOME DO USUÁRIO}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate corporis praesentium placeat quos qui soluta natus dolore accusamus esse, saepe reiciendis eligendi asperiores hic ab impedit? Illo, nostrum unde?</p>
                    <ul class="avaliacao_lista">
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                    </ul>
                    <p>Usuário recomenda o produto: <span class="recomendacao">SIM</span></p>
                </div>
                <div class="comentario">
                    <p>{NOME DO USUÁRIO}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate corporis praesentium placeat quos qui soluta natus dolore accusamus esse, saepe reiciendis eligendi asperiores hic ab impedit? Illo, nostrum unde?</p>
                    <ul class="avaliacao_lista">
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                    </ul>
                    <p>Usuário recomenda o produto: <span class="recomendacao">SIM</span></p>
                </div>
                <div class="comentario">
                    <p>{NOME DO USUÁRIO}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate corporis praesentium placeat quos qui soluta natus dolore accusamus esse, saepe reiciendis eligendi asperiores hic ab impedit? Illo, nostrum unde?</p>
                    <ul class="avaliacao_lista">
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                    </ul>
                    <p>Usuário recomenda o produto: <span class="recomendacao">SIM</span></p>
                </div>
                <div class="comentario">
                    <p>{NOME DO USUÁRIO}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate corporis praesentium placeat quos qui soluta natus dolore accusamus esse, saepe reiciendis eligendi asperiores hic ab impedit? Illo, nostrum unde?</p>
                    <ul class="avaliacao_lista">
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                    </ul>
                    <p>Usuário recomenda o produto: <span class="recomendacao">SIM</span></p>
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
    <div id="conteudoDiv">

    </div>
    <script src="Scripts/produto_especifico.js"></script>
</body>
</html>