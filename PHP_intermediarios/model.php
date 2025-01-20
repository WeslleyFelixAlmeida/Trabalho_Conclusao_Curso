<?php
class Model
{
    private $hostname = "localhost";
    private $bancodedados = "BW_database";
    private $usuario = "root";
    private $senha = "";
    
    protected function verificar_existencia_conta($email, $tabela){//Alterado
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $dados = array();
        switch($tabela) {
            case "clientes":
                $comando_SQL = "SELECT email FROM clientes where email = '$email'";
                $resultado = mysqli_query($conexao_SQL, $comando_SQL);
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    $dados[] = $linha['email'];
                }
                break;
            case "vendedores":
                $comando_SQL = "SELECT email FROM vendedores where email = '$email'";
                $resultado = mysqli_query($conexao_SQL, $comando_SQL);
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    $dados[] = $linha['email'];
                }
                break;
        }

        if(count($dados) > 0){
            return false;
        }
        else{
            return true;
        }
    }

    protected function inserirDadosCliente($usuario, $email, $dataNasc, $telefone, $cpf, $senha){//Alterado
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $senha_criptografada = $this->senha_criptografia($senha);

        $dados_cadastro = array(
            'username' => mysqli_real_escape_string($conexao_SQL, $usuario),
            'userEmail' => mysqli_real_escape_string($conexao_SQL, $email),
            'dataNasc' => mysqli_real_escape_string($conexao_SQL, $dataNasc),
            'userTel' => mysqli_real_escape_string($conexao_SQL, $telefone),
            'userCPF' => mysqli_real_escape_string($conexao_SQL, $cpf),
            'userHash' => mysqli_real_escape_string($conexao_SQL, $senha_criptografada)
        );
        
        $comando_SQL = "INSERT INTO clientes VALUES (default,?,?,?,?,?,?, '". date("Y-m-d"). "', '', 'cliente')"; 
        $resultado = $conexao_SQL->prepare($comando_SQL);
        
        $resultado->bind_param("ssssss", $dados_cadastro['username'], $dados_cadastro['dataNasc'], $dados_cadastro['userEmail'], $dados_cadastro['userTel'], $dados_cadastro['userCPF'], $dados_cadastro['userHash']);

        $resultado->execute();
    }

    protected function inserirDadosVendedor($usuario, $email, $dataNasc, $telefone, $cpf, $cnpj, $senha){//NOVA
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $senha_criptografada = $this->senha_criptografia($senha);

        $dados_cadastro = array(
            'username' => mysqli_real_escape_string($conexao_SQL, $usuario),
            'userEmail' => mysqli_real_escape_string($conexao_SQL, $email),
            'dataNasc' => mysqli_real_escape_string($conexao_SQL, $dataNasc),
            'userTel' => mysqli_real_escape_string($conexao_SQL, $telefone),
            'userCPF' => mysqli_real_escape_string($conexao_SQL, $cpf),
            'userCNPJ' => mysqli_real_escape_string($conexao_SQL, $cnpj),
            'userHash' => mysqli_real_escape_string($conexao_SQL, $senha_criptografada)
        );
        
        $comando_SQL = "INSERT INTO vendedores VALUES (default,?,?,?,?,?,?, '". date("Y-m-d"). "', '', 'vendedor', '$dataNasc')";
        $resultado = $conexao_SQL->prepare($comando_SQL);
        $resultado->bind_param("ssssss", $dados_cadastro['username'], $dados_cadastro['userEmail'], $dados_cadastro['userTel'], $dados_cadastro['userCNPJ'], $dados_cadastro['userCPF'], $dados_cadastro['userHash']);        

        $resultado->execute();
    }


    protected function senha_criptografia($senha) {
        $opcoes = [
            'cost' => 9,
        ]; 

        try{
            $hashSenha = password_hash("$senha", PASSWORD_BCRYPT, $opcoes);
            return $hashSenha;
        }
        catch (Exception $e)
        {
        }
    }

    protected function compararHash($senha, $hash){
        try{
            return password_verify($senha, $hash);
        }
        catch(Exception $e){

        }
    }

    protected function login_vendedor($email, $senha){
        $dados = array();
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);

        $comando_SQL = "SELECT id, senha FROM vendedores where email = '$email'";

        $resultado = mysqli_query($conexao_SQL, $comando_SQL);

        while ($linha = mysqli_fetch_assoc($resultado)) {
            $dados[0] = $linha['id'];
            $dados[1] = $linha['senha'];
        }

        if(count($dados) > 0){
            $teste_senha = $this->compararHash($senha, $dados[1]);

            if($teste_senha){
                return true;
            }
            else{
                return false;
            }
        }

        else{
            return false;
        }
    }

    protected function pegarID_vendedor($email){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "SELECT id FROM vendedores where email = '$email'";
        $resultado = mysqli_query($conexao_SQL, $comando_SQL);
        $dados = array();
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $dados[0] = $linha['id'];
        }
        return $dados[0];
    }

    protected function puxar_informacoes_vendedor($ID_usuario){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "SELECT * FROM vendedores where id = $ID_usuario";
        $resultado = mysqli_query($conexao_SQL, $comando_SQL);
        $dados = array();
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $dados[0] = $linha['id'];
            $dados[1] = $linha['usuario'];
            $dados[2] = $linha['email'];
            $dados[3] = $linha['dataNasc'];
            $dados[4] = $linha['telefone'];
            $dados[5] = $linha['cpf'];
            $dados[6] = $linha['cnpj'];
            $dados[7] = $linha['senha'];
            $dados[8] = 'vendedor';
        }
        return $dados; 
    }

    protected function login($email, $senha){
        $dados = array();
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);

        $comando_SQL = "SELECT id, senha FROM clientes where email = '$email'";

        $resultado = mysqli_query($conexao_SQL, $comando_SQL);

        while ($linha = mysqli_fetch_assoc($resultado)) {
            $dados[0] = $linha['id'];
            $dados[1] = $linha['senha'];
        }

        if(count($dados) > 0){
            $teste_senha = $this->compararHash($senha, $dados[1]);

            if($teste_senha){
                return true;
            }
            else{
                return false;
            }
        }

        else{
            return false;
        }
    }

    protected function pegarID($email){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "SELECT id FROM clientes where email = '$email'";
        $resultado = mysqli_query($conexao_SQL, $comando_SQL);
        $dados = array();
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $dados[0] = $linha['id'];
        }
        return $dados[0];
    }

    protected function puxar_informacoes($ID_usuario){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "SELECT * FROM clientes where id = $ID_usuario";
        $resultado = mysqli_query($conexao_SQL, $comando_SQL);
        $dados = array();
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $dados[0] = $linha['id'];
            $dados[1] = $linha['usuario'];
            $dados[2] = $linha['email'];
            $dados[3] = $linha['dataNasc'];
            $dados[4] = $linha['telefone'];
            $dados[5] = $linha['cpf'];
            $dados[6] = $linha['senha'];
            $dados[7] = $linha['tipoConta'];
        }
        return $dados; 
    }


    protected function puxar_info_produto($id_produto){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "SELECT * FROM produtos where id = $id_produto";
        $resultado = mysqli_query($conexao_SQL, $comando_SQL);
        $dados = array();
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $dados[0] = $linha['id'];
            $dados[1] = $linha['nome_produto'];
            $dados[2] = $linha['descricao_produto'];
            $dados[3] = $linha['id_vendedor_responsavel'];
            $dados[4] = $linha['preco_produto'];
            $dados[5] = $linha['img_produto'];
            $dados[6] = $linha['volume'];
            $dados[7] = $linha['tipo_img'];
            $dados[8] = $linha['qntd_disponivel'];
        }
        return $dados;
    }

    protected function comprar($dado1, $dado2, $dado3, $dado4, $dado5, $dado6, $dado7, $dado8, $dado9, $dado10, $dado11, $dado12, $dado13, $dado14, $dado15, $dado16, $dado17, $dado18){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);    
        $comando_SQL = "INSERT INTO vendas VALUES (default, '$dado1', '$dado2', '$dado3', '$dado4', '$dado5', '$dado6', '$dado7', '$dado8', '$dado9', '$dado10', '$dado11', '$dado12', $dado13, $dado14, $dado15, $dado16, NOW(), '$dado17', '$dado18')";

        mysqli_query($conexao_SQL, $comando_SQL);
    }

    protected function checar_existencia_codigo_compra($cod_testar){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "SELECT codigoCompra FROM vendas where codigoCompra = '$cod_testar'";

        $dados = mysqli_query($conexao_SQL, $comando_SQL);
        $linhas_consulta = array();
        while($linhas = $dados->fetch_assoc()){
            $linhas_consulta[] = $linhas;
        }
        if(count($linhas_consulta) < 1)
        {
            return false;
        }
        else{
            return true;
        }
    }
    
    protected function puxar_dados_compra($id_usuario){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "SELECT v.ID_contaResponsavel,v.pagamento, v.dia_horario_compra, v.valor, v.ID_produto FROM clientes as u inner join vendas as v on u.id = v.ID_contaResponsavel where v.ID_contaResponsavel = $id_usuario";

        $dados = mysqli_query($conexao_SQL, $comando_SQL);
        $linhas_consulta = array();
        while($linhas = $dados->fetch_assoc()){
            $linhas_consulta[] = $linhas ;
        }
        if(count($linhas_consulta) < 1)
        {
            $linhas_consulta = [""];
        }
        return $linhas_consulta;
    }

    protected function alterar_usuario($novo_usuario, $id_usuario){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando_SQL = "UPDATE clientes SET usuario = '$novo_usuario' where id =  $id_usuario";
        mysqli_query($conexao_SQL, $comando_SQL);
    }

    protected function contabilizarProdutosTotais(){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);
        $comando = 'SELECT COUNT(*) as QNTD_produtos FROM produtos';

        $dados = mysqli_query($conexao_SQL, $comando);
        $retorno = array();
        while($linhas = $dados->fetch_assoc()){
            $retorno[] = $linhas;
        }
        return $retorno[0];
    }
 //AQUI
    protected function adicionar_produto($nome_produto, $descricao_produto, $id_vendedor, $preco_produto, $caminho_img, $volume, $extensao_img,$quantidade){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);

        $comando_SQL = "INSERT INTO produtos VALUES (default, '$nome_produto', '$descricao_produto', $id_vendedor, '$preco_produto', '$caminho_img','$volume', '$extensao_img', $quantidade)";

        mysqli_query($conexao_SQL, $comando_SQL);
    }

    protected function dadosAPIcep($cep){
        $dadosAPI = file_get_contents("https://viacep.com.br/ws/$cep/json/");
        return $dadosAPI;
    }

    protected function puxar_infos_compra_atual($codigo_compra){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);

        $comando_SQL = "SELECT v.id,v.ID_contaResponsavel,v.pagamento, v.dia_horario_compra, v.valor, v.ID_produto FROM clientes as u inner join vendas as v on u.id = v.ID_contaResponsavel where v.codigoCompra = '$codigo_compra'";

        $dados = mysqli_query($conexao_SQL, $comando_SQL);
        $linhas_consulta = array();
        while($linhas = $dados->fetch_assoc()){
            $linhas_consulta[] = $linhas;
        }
        if(count($linhas_consulta) < 1)
        {
            $linhas_consulta = [""];
        }
        return $linhas_consulta;
    }

 //AQUI
    protected function puxar_dados_prod_adicionado($id_vendedor){
        $conexao_SQL = mysqli_connect($this->hostname, $this->usuario, $this->senha, $this->bancodedados);

        $comando_SQL = "SELECT * from produtos where id_vendedor_responsavel = $id_vendedor";

        $dados = mysqli_query($conexao_SQL, $comando_SQL);
        $linhas_consulta = array();
        while($linhas = $dados->fetch_assoc()){
            $linhas_consulta[] = $linhas;
        }
        if(count($linhas_consulta) < 1)
        {
            $linhas_consulta = [""];
        }
        return $linhas_consulta;
    }
}

?>
