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
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="Styles/RS_estilo.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
</head>
<body>
    <?php
        include 'Classes_paginas/recuperar_senha_class.php';
    ?>

    <div class="page">
        <div class="containerLogo">
            <img src="imagens/logo_01.png" alt="logo" id="logo">
        </div>
   
        <form method="POST" class="formRS">
            <div class="container-topo-form">
                <a href="login.php" id="link-voltar">
                    <img src="imagens/seta_login_form_branca.png" alt="" id="voltar-img">
                </a>
                <div class="containerLogo_media">
                    <img src="imagens/logo_01.png" alt="logo" id="logo_media">
                </div>                
            </div>
            <h1>Recuperar senha</h1>
            <p>Digite seu email de acesso no campo abaixo.</p>

            <label for="email">E-mail de recuperação</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true"  id="emailRecuperacao"/>
            <a href="login_<?php echo $recuperar_senha_class->url_origem;?>.php">Voltar a página de login</a>
            <a href="index.php">Voltar a home</a>
            <input type="submit" value="Recuperar" class="btn"/>
        </form>
    </div>
    <script src="Scripts/rs_script.js"></script>
</body>
</html>
