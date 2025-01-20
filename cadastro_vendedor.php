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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Cadastro</title>
    <link rel="stylesheet" href="Styles/cadastro_vendedor.css">
</head>
<body>
<div class="containerAlerta">
        <div class="alerta">
            <div class="itensAlerta">
                <h1 class="tituloAlerta">Existem campos vazios ou informações incompletas/inválidas</h1>
                <p>Verifique todos os campos e tente novamente</p>
                <p>OBS! As senhas devem ser iguais</p>
                <input type="button" value="Fechar" class="fecharBotao" onclick="confirmacao_alerta()">
            </div>
        </div>
    </div>
    <div class="page">
        <div class="containerLogo">
            <img src="imagens/logo_01.png" alt="logo" id="logo">
        </div>

        <form method="POST" class="formCadastro" name= "formCadastro">
            <div class="topoFormCadastro">
                <div class="container_topo_form">
                    <a href="cadastro_verificacao.php" id="link-voltar"><img src="imagens/seta_login_form_branca.png" alt="botão de voltar" id="voltar-img"></a>
                    <h1>Cadastro vendedor</h1>
                    <div class="containerLogo_media">
                        <img src="imagens/logo_01.png" alt="logo" id="logo_media">
                    </div>
                </div>
                <p>Digite os seus dados de acesso no campo abaixo.</p>
                <p>* Campos obrigatórios</p>
                <div class="container_cpf_cnpj">
                    <p>Fazer cadastro com:</p>
                    <div class="escolha_cpf_cnpj">
                        <label for="escolha_cpf">CPF:</label>
                        <input type="radio" id="escolha_cpf" name="opcaoReg">
                        <label for="escolha_cnpj">CNPJ:</label>
                        <input type="radio" id="escolha_cnpj" name="opcaoReg">
                    </div>
                </div>
            </div>
            <div class="itensForm">
                <div class="itensEsquerda">
                    <label for="usuario" class="usuario_label">Usuário</label>
                    <input value="teste" id="usuario_validacao" type="text" placeholder="Digite seu Usuário" maxlength="225" required/>
                    
                    <label for="emailCadastro" class="label_email">E-mail</label>
                    <input id="email_validacao" type="text" placeholder="Digite seu e-mail" maxlength="225" required/>
                    
                    <label for="dataNasc" class="dataNasc_label">Data de nascimento</label>
                    <input type="date" value="1111-11-11" id="dataNasc_validacao" placeholder="Digite seu e-mail"/>

                    <label for="telefoneUsuario" class="telefone_label">Telefone</label>
                    <input value="(11) 1 1111-1111" type="text" id="telefone_validacao" class="telefoneUsuario" placeholder="Digite seu telefone" maxlength="16" required/>
                </div>

                <div class="itensDireita">
                    <label for="cpfUsuario" class="cpf_label">CPF</label>
                    <input value="111.111.111-11" type="text" id="cpf_validacao" placeholder="Digite seu CPF" maxlength="14"/>
                    
                    <label for="cnpjVendedor" class="cnpj_label">CNPJ</label>
                    <input value="11.111.111/0001-11" type="text" id="cnpj_validacao" placeholder="Digite seu CNPJ" maxlength="18"/>
                    
                    <label for="senhaCadastro" class="senha_label">Senha</label>
                    <input value="123456" id="senha_validacao" type="password" placeholder="Digite sua senha" maxlength="225" required/>
                    
                    <label for="senhaCadastro_conf" class="confSenha_label">Confirmar Senha</label>
                    <input value="123456" id="confSenha_validacao" type="password" placeholder="Digite sua senha" maxlength="225" required/>
                </div>
            </div>
            <a href="index.php">Voltar ao inicio</a>
            <a href="login_vendedor.php">Voltar ao login</a>
            <input type="button" value="Criar conta" class="btn" onclick="navegar()"/>
        </form>   


    <script src="Scripts/cadastro_vendedor.js"></script>
</body>
</html>