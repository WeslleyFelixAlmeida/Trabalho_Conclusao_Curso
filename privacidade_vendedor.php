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
    <title>Privacidade</title>
    <link rel="stylesheet" href="Styles/vendedor_privacidade.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
    <link rel="shortcut icon" href="imagens/favicon.ico" />
</head>
<body>
    <?php
        include 'Classes_paginas/vendedor_privacidade_class.php';
    ?>
    <header>
        <div class="logoContainer">
            <a onclick="navegarHome()" id="ir_para_home"><img src="imagens/logo.png" alt="logo" class="logo"></a>
        </div>
    </header>
    <main>
        <div class="container_main">
            <h1>Dados pessoais</h1>
            <input type="button" value="Voltar" onclick="navegar_perfil()" id="voltar_botao">
            <div class="perfil_foto_container">
                <label>Foto de perfil: </label>
                <div class="container_img_processos">
                    <div class="container_img_perfil">
                        <img src="https://play-lh.googleusercontent.com/7cis8M9xeE5wYpR9QvJOC1dnvG5mlI6sy3LpP6kS3FYV29SU5dtBBO2ApKXVf2qWYg=s256-rw" alt="Foto de perfil" class="img_perfil">
                    </div>
                    <div class="container_input_file">
                        <p>Gostaria de Alterar sua foto de perfil?</p>
                        <label style="color: red;">* Formatos aceitos (JPEG, JPG e PNG)</label>
                        <input type="file" accept="image/png, image/jpeg, image/jpg" onclick="" id="input_foto_perfil">
                        <input type="button" value="Alterar foto" id="alterar_img_botao">
                    </div>
                </div>
            </div>
            <div class="container_informacoes">
                <div class="container_usuario container_interno_informacoes">
                    <label>Nome de vendedor: <span class="informacao"><?php echo $_SESSION["usuario"];?></span></label>
                    <p>*Gostaria de Alterar seu nome de vendedor?</p>
                    <div class="inputs_container_interno_informacoes">
                        <input type="text" name="usuario_novo" id="usuario_novo" placeholder="Novo usuário">
                        <input type="button" value="Alterar nome" onclick="mudarUsuario()">
                    </div>
                </div>
                <div class="container_telefone container_interno_informacoes">
                    <label>Telefone: <span class="informacao"><?php echo $_SESSION["telefone"];?></span></label>
                    <p>*Gostaria de alterar o número de telefone?</p>
                    <div class="inputs_container_interno_informacoes">
                        <input type="text" name="usuario_novo" id="telefone_novo" placeholder="Novo Telefone">
                        <input type="button" value="Alterar nome">
                    </div>
                </div>
                <div class="container_Senha container_interno_informacoes">
                    <p>*Gostaria de alterar sua senha?</p>
                    <div class="inputs_container_interno_informacoes">
                        <input type="text" name="usuario_novo" id="senha_novo" placeholder="Senha antiga">
                        <input type="text" name="usuario_novo" id="senha_novo" placeholder="Nova senha">
                        <input type="button" value="Alterar senha">
                    </div>
                </div>
                <div class="container_email container_interno_informacoes">
                    <label>E-mail: <span class="informacao"><?php echo $_SESSION["email"];?></span></label>
                </div>
                <div class="container_cpf container_interno_informacoes">
                    <label>CPF: <span class="informacao"><?php echo $_SESSION["cpf"];?></span></label>
                </div>
                <div class="container_cpf container_interno_informacoes">
                    <label>CNPJ: <span class="informacao"><?php echo $_SESSION["cnpj"];?></span></label>
                </div>
                <div class="container_cpf container_interno_informacoes">
                    <label>Data de nascimento: <span class="informacao"><?php echo $_SESSION["dataNasc"];?></span></label>
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

    <script src="Scripts/vendedor_privacidade.js"></script>
</body>
</html>