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
    <title>Sobre nos</title>
    <link rel="stylesheet" href="Styles/style_sobre_e_privacidade.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <header>
        <div class="logoContainer">
            <a href="index.php" id="ir_para_home"><img src="imagens/logo.png" alt="logo" class="logo"></a>
        </div>
    </header>
    <main>
        <div class=container_central>
            <div class="centro_main">
                <a href="index.php">Página inicial</a>
                <h1>Sobre nos</h1>
                <p>
                    Blossom'wine traduzindo "Vinho da flor". Somos uma empresa do nicho de vendas em e-commerce, nossos principais produtos são vinhos.
                </p>
                <p>
                    Buscamos sempre os melhores produtos para nossos cliente e ainda oferecer a melhor experiência durante o uso de nosso serviço.
                </p>
                <p>
                    Agradecemos sempre pela preferência.
                </p>
                <p>
                    Observação: Sobre todas as imagens presentes no site. Não detemos os direitos sobre nenhuma delas e deixamos aqui a resalva de que este projeto <strong>NÃO TEM fins comerciais</strong> , portanto as imagens estão apenas sendo usadas como meio de demonstração.
                    Ainda neste tópico sobre direitos. Sobre as marcas citadas no site, informamos que estas são apenas para <strong>meios ilustrativos</strong> não havendo qualquer tipo de vínculo entre "Blossom's Wine - E-commerce" e elas.
                </p>
                <p>Blossom's Wine - E-commerce</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="links_footer_container">
            <ul class="links_footer">
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
    <script src="Scripts/script_sobre_e_privacidade.js"></script>
</body>
</html>