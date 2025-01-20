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
    <title>Endereços</title>
    <link rel="stylesheet" href="Styles/enderecos.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
        include 'Classes_paginas/enderecos_cliente_class.php';
    ?>
    <header>
        <div class="logoContainer">
            <a onclick="navegarHome()" id="ir_para_home"><img src="imagens/logo.png" alt="logo" class="logo"></a>
        </div>
    </header>
    <main>
        <div class=centro_main>
            <input onclick="navegarPerfil()" type="button" value="Voltar">
            <h1>Veja ou altere seus endereços de entrega</h1>
            <p>É possível adicionar até três endereços de entrega.</p>
            <div class="centro_esquerda">
                <!-- <a onclick=""> -->
                    <div class="containers">
                        <h1>Endereço 1</h1>  
                        <p>Rua: <span id="rua_01" class="inf_endereco"></span></p>
                        <p>Número: <span id="numero_01" class="inf_endereco"></span></p>
                        <p>Complemento: <span id="complemento_01" class="inf_endereco"></span></p>      
                        <p>Ponto de referência: <span id="ponto_ref_01" class="inf_endereco"></span></p>
                        <div class="container-botoes">
                            <input type="button" value="excluir endereço">
                            <input type="button" value="Alterar endereço">
                        </div>
                    </div>
                <!-- </a> -->
                <!-- <a onclick=""> -->
                    <div class="containers">
                        <h1>Endereço 2</h1>
                        <p>Rua: <span id="rua_02" class="inf_endereco"></span></p>
                        <p>Número: <span id="numero_02" class="inf_endereco"></span></p>
                        <p>Complemento: <span id="complemento_02" class="inf_endereco"></span></p>      
                        <p>Ponto de referência: <span id="ponto_ref_02" class="inf_endereco"></span></p>
                        <div class="container-botoes">
                            <input type="button" value="excluir endereço">
                            <input type="button" value="Alterar endereço">
                        </div>
                    </div>
                <!-- </a> -->
                <!-- <a onclick=""> -->
                    <div class="containers">
                        <h1>Endereço 3</h1>
                        <p>Rua: <span id="rua_03" class="inf_endereco"></span></p>
                        <p>Número: <span id="numero_03" class="inf_endereco"></span></p>
                        <p>Complemento: <span id="complemento_03" class="inf_endereco"></span></p>      
                        <p>Ponto de referência: <span id="ponto_ref_03" class="inf_endereco"></span></p>
                        <div class="container-botoes">
                            <input type="button" value="excluir endereço">
                            <input type="button" value="Alterar endereço">
                        </div>
                    </div>
                <!-- </a> -->
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

    <script src="Scripts/enderecos.js"></script>
</body>
</html>