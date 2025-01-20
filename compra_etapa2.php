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
    <title>Pagamento</title>
    <link rel="stylesheet" href="Styles/compra_etapa2.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
        include 'Classes_paginas/compra_etapa2_class.php';
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
            <div class="container_escolha_pagamento">
                <h1>Escolha o meio de pagamento</h1>
                <div class="container_elementos_escolha">
                    <p>Pagar com cartão:</p>
                    <input type="radio" name="escolha_pagamento" id="cartao_input">
                </div>
                <div class="escolha_pagamento_cartao">
                    <form id="form_cartao">
                        <p>Informe os seguintes dados para prosseguir</p>
                        <div class="dados_cartao">
                            <div class="dados_cartao_top">
                                <div class="linhas_dados">
                                    <label for="numero_cartao">Número do cartão:</label>
                                    <input type="text" name="" id="numero_cartao" placeholder="Número do cartão" maxlength="19">
                                </div>
                                <div class="linhas_dados">
                                    <label for="nome_cartao">Nome do proprietário:</label>
                                    <input type="text" name="" id="nome_cartao" placeholder="Nome do proprietário" maxlength="224">
                                    <p>*Como consta no cartão</p>
                                </div>
                            </div>
                            <div class="dados_cartao_inf">
                                <div class="linhas_dados">
                                    <label for="dataVenc_cartao">Data de validade do cartão:</label>
                                    <input type="date" name="" id="dataVenc_cartao" >
                                </div>
                                <div class="linhas_dados">
                                    <label for="cvv_cartao">Código de verificação:</label>
                                    <input type="text" name="" id="cvv_cartao" placeholder="CVV" maxlength="3">
                                </div>
                            </div>
                            <div class="checagem_cartao">
                                <input type="checkbox" name="" id="confirmacao_compra_cartao">
                                <label for="confirmacao_compra_cartao">Estou ciente dos termos de compra através de cartões.</label>
                                <a href="#">Ver termos</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container_elementos_escolha">
                    <p>Pagar com boleto:</p>
                    <input type="radio" name="escolha_pagamento" id="boleto_input">
                </div>
                <div class="escolha_pagamento_boleto">
                    <form id="form_boleto">
                        <p>Informe os seguintes dados para prosseguir</p>
                        <div class="linha_topo_boleto">
                            <div class="itens_linha_boleto">
                                <label for="cpf_comprador">CPF:</label>
                                <input type="text" name="" id="cpf_comprador" placeholder="CPF" maxlength="14" value="<?php echo $_SESSION["cpf"];?>">
                            </div>
                            <div class="itens_linha_boleto">
                                <label for="nome_comprador">Nome completo:</label>
                                <input type="text" name="" id="nome_comprador" placeholder="Nome completo" maxlength="224">
                            </div>
                        </div>
                        <div class="linha_inf_boleto">
                            <div class="itens_linha_boleto">
                                <label for="dataNasc_comprador">Data de nascimento:</label>
                                <input type="date" name="" id="dataNasc_comprador" placeholder="Data de nascimento" value="<?php echo $_SESSION["dataNasc"];?>">
                            </div>
                            <div class="itens_linha_boleto">
                                <label for="email_comprador">E-mail:</label>
                                <input type="text" name="" id="email_comprador" placeholder="E-mail" value="<?php echo $_SESSION["email"];?>" maxlength="224">
                            </div>
                        </div>
                        <input type="checkbox" name="" id="confirmacao_compra_boleto">
                        <label for="confirmacao_compra_boleto">Estou ciente dos termos de compra através de boletos.</label>
                        <a href="#">Ver termos</a>
                    </form>
                </div>
            </div>
            <div class="botoes">
                <input type="button" value="Voltar" onclick="etapa_compra1()">
                <input type="button" value="Próximo" onclick="etapa_compra3()">
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

    <script src="Scripts/compra_etapa2.js"></script>
</body>
</html>