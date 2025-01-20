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
    <title>Estados de atuação</title>
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
                <h1>Estados de atuação</h1>
                <p>Nossos serviços estão presentes em todo território brasileiro.</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="links_footer_container">
            <ul class="links_footer">
                <li><a href="sobre_nos.php">Sobre nos</a></li>
                <li><a href="contatos.php">Contatos</a></li>
                <li><a href="privacidade.php">Politica de privacidade</a></li>
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