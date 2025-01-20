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
    <title>Vender</title>
    <link rel="stylesheet" href="Styles/vender_produto.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <header>
        <div class="logoContainer">
            <a onclick="navegarHome()" id="ir_para_home"><img src="imagens/logo.png" alt="logo" class="logo"></a>
        </div>
    </header>
    <main>
        <a href="perfil_vendedor.php" id="voltar_link">Voltar</a>
        <div class="itens_main_topo">
            <form action="" id="form" enctype="multipart/form-data">
                <div class="linhas_add_produto">
                    <label for="nome_produto">Informe o nome do produto abaixo:</label>
                    <input type="text" name="nome_prod_novo" id="nome_prod_novo" placeholder="Nome do produto" maxlength="50" value="vinho branco">
                </div>

                <div class="linhas_add_produto">
                    <label for="desc_produto">Informe uma descrição para o produto abaixo. (255 caracteres no máximo)</label>
                    <textarea name="desc_produto" id="desc_produto" cols="30" rows="10" maxlength="255" value="vinho"></textarea>
                </div>

                <div class="linhas_add_produto">
                    <label for="QNTD_produto">Informe a quantidade disponível em estoque do produto abaixo:</label>
                    <input type="text" name="QNTD_produto" id="QNTD_produto" placeholder="Quantidade" maxlength="15">
                    <div class="container-volume">  
                        <div class="container-volume-valor">
                            <label for="volume_produto">Informe o volume do produto abaixo:</label>
                            <input type="text" id="volume_produto" name="volume_produto" maxlength="8" placeholder="Volume do produto">
                        </div>
                        <div class="container-volume-unidade">
                            <label for="">Escolha a unidade de medida:</label>
                            <select name="escolha_volume" id="escolha_volume">
                                <option value="ml" selected>Mililitros</option>
                                <option value="l">Litros</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="linhas_add_produto">
                    <p>Informe o preço do produto abaixo:</p>
                    <label for="preco_int_parte">Valor inteiro</label>
                    <input type="text" id="preco_int_parte" placeholder="Preço do produto" maxlength="8" name="preco_int_parte">
                    
                    <label for="preco_dec_parte">Valor decimal</label>
                    <input type="text" placeholder="Valor decimal" id="preco_dec_parte" maxlength="2" name="preco_dec_parte">
                </div>

                <div class="linhas_add_produto">
                    <p>Insira uma imagem do produto clicando no botão abaixo</p>
                    <input type="file" name="imagem_produto" id="input_img">
                </div>
                <div class="botoes_form_add_produto">
                    <p>Você pode visualizar como esta ficando no card ao lado e abaixo</p>
                    <input type="submit" value="Adicionar produto ao catálogo" id="botao_add_produto">
                </div>
            </form>

            <div class="container_card_produto">
                <p>O card do produto ficará assim:</p>
                <div class="visualizar_card_produto">
                    <div class="card_cont_1">
                        <div class="container_img_card">
                            <img class="img_card" alt="imagem do produto" src="" id="img_card">
                        </div>
                        <div class="container_txt_card">
                            <p id="nome_produto">Vinho branco</p>
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
                            <p id="valor_atual">Por: <span id="preco_int_card"></span>.<span id="preco_dec_card"></span></p>
                            <p id="valor_parcelado">Ou: R$00.00 Em até 3x sem juros.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>

        <div class="container_produto_especifico">
            <p>A página do produto ficará assim:</p>
            <div class="visualizar_prod_espec">
                <div class="container_main">
                    <div class="container_main_topo">
                        <div class="main_esquerda">
                            <div class="container_img">
                                <img src="" class="img_produto" alt="imagem grande do produto" id="img_card_grande">
                            </div>
                        </div>
                        <div class="main_direita">
                            <div class="informacoes_produto">
                                <p class="nome_produto" id="nome_produto_espec">

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
                                            <p>Volume: <span id="valor_int_volume"></span> <span id="unidade_medida_produto"></span></p>
                                        </div>
                                        <div class="container-quantidade-grande">
                                            <p>Quantidade em estoque: <span id="quantidade_estoque_produto"></span> unidade(s)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc_produto">
                                    <p>Descrição do produto:</p>
                                    <textarea class="container_desc_produto_add" id="desc_produto_add" cols="30" rows="10" disabled>

                                    </textarea>

                                    <div class="info_vendedor">
                                        <p>Vendido por: <span class="informacoes_para_cliente"><?php echo $_SESSION["usuario"];?></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="container_informacoes">
                                <label for="cep_cliente">Calcular frete:</label>
                                <input type="text" value="11.454-874" id="cep_cliente" placeholder="Insira o seu CEP" disabled>
                                <input type="button" value="Calcular" disabled>
                                <div class="meios_pagamento">
                                    <div class="boleto">
                                        <p>Pagar com boleto:</p>
                                        <img src="imagens/imagens_produto_especifico/boleto_logo.png" alt="boleto" id="imagem_boleto">
                                    </div>
                                    <div class="cartao">
                                        <p>Pagar usando cartão:</p>
                                        <img src="imagens/imagens_produto_especifico/american_express.png" class="cartoes_logo" alt="cartao">
                                        <img src="imagens/imagens_produto_especifico/elo.png" class="cartoes_logo" alt="cartao">
                                        <img src="imagens/imagens_produto_especifico/hipercard.png" class="cartoes_logo" alt="cartao">
                                        <img src="imagens/imagens_produto_especifico/master_card.png" class="cartoes_logo" alt="cartao">
                                        <img src="imagens/imagens_produto_especifico/visa.png" class="cartoes_logo" alt="cartao">
                                    </div>
                                </div>
                                <div class="container_cep">
                                    <div class="cep_infos">
                                        <p>CEP: <span class="informacoes_para_cliente">00.000-000</span></p>
                                        <p>Valor: <span class="informacoes_para_cliente">R$19,93</span></p>
                                    </div>
                                    <p>Chega dia: <span class="informacoes_para_cliente">1 de Janeiro de 2023</span></p>
                                </div>
                                <p class="valor_final">Valor final:
                                    <span class="valor_final_preco"><span id="preco_int_grande"></span>.<span id="preco_dec_grande"></span></span>
                                    </span>
                                </p>
                            </div>
                            <div class="botoes_main_direita">
                                <input type="button" value="Comprar">
                                <input type="button" value="Adicionar ao carrinho">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="topo_footer">
            <a href="sobre_nos.php" id="link_sobre_nos">Sobre nos</a>
            <a href="privacidade.php" id="link_politica_privacidade">Política de privacidade</a>
        </div>
        <div class="rodape_footer">
            <p>&copy;Blossom's Wine</p>
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
    <script src="Scripts/vender_produtos.js"></script>
</body>

</html>