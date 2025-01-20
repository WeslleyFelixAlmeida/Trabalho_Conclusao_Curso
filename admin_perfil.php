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
    <title>Administrador</title>
    <link rel="stylesheet" href="Styles/admin_perfil.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <header>
        <div class="logoContainer">
            <a onclick="navegarHome()" id="ir_para_home"><img src="imagens/logo.png" alt="logo" class="logo"></a>
        </div>
    </header>
    <main>
        <div class="topo_main">
            <div class="espaco_perfil">
                <img src="imagens/itens_perfil/pato.jpg" alt="foto_perfil" class="foto_perfil">
                <h1 id="usuario_nome"></h1>
            </div>
            <div class="espaco_botao">
                <input type="button" value="Desconectar" class="desconectar_botao" onclick="desconectar()">
                <input type="button" onclick="navegarHome()" value="Página inicial" class="home-botao"> 
            </div>
        </div>

        <div class=centro_main>
            <div class="container-relatorios">
                <h1>Relatórios:</h1>
                <div class="container-elementos">
                    <div class="container-elemento">
                        <h2>Relatório de vendas</h2>
                    </div>
                    <div class="container-elemento">
                        <h2>Relatório de clientes cadastrados</h2>
                    </div>
                    <div class="container-elemento">
                        <h2>Relatório de vendedores cadastrados</h2>
                    </div>
                    <div class="container-elemento">
                        <h2>Relatório de produtos cadastrados</h2>
                    </div>
                </div>
            </div>
            
            <div class="container-intermediarios">
                <h1>Intermediários:</h1>
                <div class="container-elementos">
                    <div class="container-elemento"><h2>Cadastro do cliente intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>Compra etapa 1 intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>Compra etapa 2 intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>Compra etapa final intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>Cards da página principal(home) intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>Informações de produtos intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>
                        Login intermediário
                    </div>
                    <div class="container-elemento"><h2>Cards de produtos comprados (perfil do cliente)</h2>
                    </div>
                    </h2>
                    <div class="container-elemento"><h2>Privacidade do cliente intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>API CEP intermediário</h2>
                    </div>
                    <div class="container-elemento"><h2>Intermediário da venda de produtos</h2>
                    </div>
                </div>
            </div>
            <div class="container-processos">
                <h1>Processos:</h1>
                <div class="container-elementos">
                    <div class="container-elemento"><h2>Cancelar uma compra</h2>
                    </div>
                    <div class="container-elemento"><h2>Remover uma conta de cliente</h2>
                    </div>
                    <div class="container-elemento"><h2>Remover uma conta de vendedor</h2>
                    </div>
                    <div class="container-elemento"><h2>Remover um produto do catálogo</h2>
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

    <script src="Scripts/admin_perfil.js"></script>
</body>
</html>