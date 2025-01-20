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
    <title>Cadastro</title>
    <link rel="stylesheet" href="Styles/cadastro_verific.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>

<body>
    <header>
        <div class="container_logo">
            <a href="index.php"><img src="imagens/logo.png" alt="logo" class="logo"></a>
        </div>
        <div class="container_logo_pequena">
            <a href="index.php"><img src="imagens/logo_01.png" alt="logo" class="logo_pequena"></a>
        </div>
        <div class="header_centro">
            <h1 class="titulo_principal">Você gostaria de fazer o cadastro como:</h1>
        </div>
        <div class="lateral_direita_header"></div>
    </header>
    <main>
        <a href="index.php" id="link-voltar">
            <img src="imagens/seta_login_form_branca.png" alt="home link" id="voltar-img">
        </a>
        <div class="container_verificacao">
            <div class="container_cards">
                <a href="cadastro_cliente.php" class="links">
                    <div class="container_cliente">
                        <div class="card_inf_cliente_cadastro">
                            <h1>Cliente</h1>
                            <h2>Sendo cliente você pode:</h2>
                            <ul>
                                <li>Comprar produtos</li>
                                <li>Ter acesso aos dados de compras pessoais</li>
                                <li>Ter acesso ao catálogo de produtos disponíveis</li>
                                <li>Avaliar produtos</li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a href="cadastro_vendedor.php" class="links">
                    <div class="container_vendedor">
                        <div class="card_inf_vendedor_cadastro">
                            <h1>Vendedor</h1>
                            <h2>Sendo vendedor você pode:</h2>
                            <ul>
                                <li>Adicionar produtos em seu banco de produtos</li>
                                <li>Remover itens de sua empresa que estão venda</li>
                                <li>Ter acesso aos dados de entregas de seus produtos</li>
                                <li>Ter acesso aos dados de contatos dos clientes que compraram com você</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <footer></footer>

    <script src="Scripts/cadastro_verific.js"></script>
</body>

</html>