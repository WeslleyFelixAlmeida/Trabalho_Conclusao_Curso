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
    <title>Login cliente</title>
    <link rel="stylesheet" href="Styles/login_estilo.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
        include 'Classes_paginas/login_cliente_class.php';
    ?>

    <div class="page">
        <div class="containerLogo">
            <img src="imagens/logo_01.png" alt="logo" id="logo">
        </div>
   
        <form method="POST" class="formLogin">
            <div class="container-topo-form">
                <a href="index.php" id="link-voltar">
                    <img src="imagens/seta_login_form_branca.png" alt="" id="voltar-img">
                </a>
                <div class="containerLogo_media">
                    <img src="imagens/logo_01.png" alt="logo" id="logo_media">
                </div>                
            </div>

            <h1>Login cliente</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true"  id="emailLogin"/>

            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" id="senhaLogin"/>

            <a href="recuperarSenha.php?login=cliente">Esqueci minha senha</a>
            <a href="cadastro_verificacao.php">Não tenho uma conta</a>
            <a href="index.php">Voltar ao inicio</a>

            <input type="button" value="Acessar" class="btn" onclick="navegar('<?php echo $login_cliente_class->pagina;?>')"/>
        </form>
    </div>
    
    <script src="Scripts/login_script_cliente.js"></script>
</body>
</html>
