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
    <title>Endereço</title>
    <link rel="stylesheet" href="Styles/compra_etapa1.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
        include 'Classes_paginas/compra_etapa1_class.php';
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
            <form class="form_main">
                <div class="dados_cliente">
                    <h1>Informe seu endereço abaixo:</h1>
                    <div class="informacoes">
                            <div class="linhas_informacao">
                                <div class="colunas_informacao">
                                    <label for="">CEP:</label>
                                    <input type="text" placeholder="CEP" id="cep" maxlength="10" value="<?php echo $compra_etapa1_class->cep_fornecido;?>">
                                </div>
                                <div class="colunas_informacao">
                                    <label for="">Rua:</label>
                                    <input type="text" placeholder="Rua" id="rua" maxlength="225">
                                </div>
                            </div>
                            <div class="linhas_informacao">
                                <div class="colunas_informacao">
                                    <label for="">Estado:</label>
                                    <input type="text" placeholder="Estado" id="estado" maxlength="2">
                                </div>
                                <div class="colunas_informacao">
                                    <label for="">Número:</label>
                                    <input type="text" placeholder="N°" id="numero" maxlength="225">
                                </div>
                                <div class="colunas_informacao">
                                    <label for="">Complemento:</label>
                                    <input type="text" placeholder="Complemento" id="complemento" maxlength="225">
                                </div>
                                <div class="colunas_informacao">
                                    <label for="">Bairro:</label>
                                    <input type="text" placeholder="Bairro" id="bairro" maxlength="225">
                                </div>
                            </div>
                            <div class="linhas_informacao">
                                <div class="colunas_informacao">
                                    <label for="">Logradouro:</label>
                                    <input type="text" placeholder="Logradouro" id="logradouro" maxlength="225">
                                </div>
                                <div class="colunas_informacao">
                                    <label for="">Município:</label>
                                    <input type="text" placeholder="município" id="municipio" maxlength="225">
                                </div>
                            </div>
                    </div>
                    <div id="valor_frete"></div>
                    <div id="dataEntrega"></div>
                    <div class="botoes">
                       <input type="button" value="Voltar" onclick="produto_especifico('<?php echo $_SESSION ["id_produto"];?>')">
                        <input type="button" value="Próximo" onclick="etapa_compra2()">
                    </div>
                </div>
            </form>
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

    <script src="Scripts/compra_etapa1.js"></script>
</body>
</html>