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
    <title>Perfil Vendedor</title>
    <link rel="stylesheet" href="Styles/perfil_vendedor.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>

<body>
    <?php
    // session_start();
    include 'Classes_paginas/perfil_vendedor_class.php';
    include_once 'PHP_intermediarios/perfil_vendedor_cards_dados.php';
    $perfil_vendedor_cards_dados = new perfil_vendedor_cards_dados();
    ?>
    <header>
        <div class="logoContainer">
            <a onclick="navegarHome()" id="ir_para_home"><img src="imagens/logo.png" alt="logo" class="logo"></a>
        </div>
    </header>
    <main>
        <div class="topo_main">
            <div class="espaco_perfil">
                <img src="imagens/itens_perfil/pato.jpg" alt="foto_perfil" class="foto_perfil">
                <h1 id="usuario_nome"><?php echo $_SESSION["usuario"]; ?></h1>
            </div>
            <div class="espaco_botao">
                <input type="button" value="Desconectar conta" class="desconectar_botao" onclick="desconectar()">
            </div>
        </div>

        <div class=centro_main>
            <div class="centro_esquerda">
                <a onclick="navegarPrivacidade()" class="privacidade">
                    <div class="primeiroContainerCE">
                        <h1>Privacidade</h1>
                        <p>Veja ou altere informações pessoais que estão no seu perfil</p>
                    </div>
                </a>
                <a onclick="navegarVenderProdutos()" class="enderecos">
                    <div class="segundoContainerCE">
                        <h1>Vender produtos</h1>
                        <p>Veja ou altere endereços de entrega</p>
                    </div>
                </a>
            </div>
            <div class="centro_direita">
                <h1 class="titulo_centro_direita">Produtos adicionados</h1>
                <p class="mensagem_centro_direita">Estes foram os produtos que você adicionou para venda em nossa loja</p>
                <div class=cards_produtos_comprados>
                    <?php
                        if (count($perfil_vendedor_cards_dados->dados_vendedor) > 0 && !$perfil_vendedor_cards_dados->produto_atual_info[0] == "") {
                            $i = 0;
                            while ($i < count($perfil_vendedor_cards_dados->dados_vendedor)) {
                                $_SESSION["produto_add_exibir"] = $i;
                                include 'PHP_intermediarios/perfil_vendedor_cards.php';
                                $i++;
                            }

                            if ($i == count($perfil_vendedor_cards_dados->dados_vendedor)) {
                                $i = 0;
                            }
                        }
                        else{
                            echo "Você ainda não adicionou produtos em nosso sistema.";
                        }
                    ?>
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
    <script src="Scripts/perfil_vendedor.js"></script>
</body>

</html>