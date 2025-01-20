<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
// $_SESSION['preco_total'] = 0;
include "model.php";
// session_start();
class compra_finalizar extends Model
{
    public function __construct(){
        $_SESSION['preco_total'] = 0;//


        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);
        if($dadosRecebidos["confirmacao"] == true){
            $_SESSION['etapa3_verificacao'] = true;

            if(isset($_SESSION['compra_carrinho']) && $_SESSION['compra_carrinho']){
                $_SESSION["id_prod_validos"];

                $codigo_compra = bin2hex(random_bytes(10));
                if($codigo_compra == $this->checar_existencia_codigo_compra($codigo_compra)){
                    while($codigo_compra == $this->checar_existencia_codigo_compra($codigo_compra)){
                        $codigo_compra = bin2hex(random_bytes(10));
                    }
                }
                
                $_SESSION['codigo_compra'] = $codigo_compra;

                for($i = 0; $i < count($_SESSION["id_prod_validos"]); $i++){
                    $info_produto = $this->puxar_info_produto($_SESSION["id_prod_validos"][$i]);
                    
                    $_SESSION['preco_total'] += $info_produto[4];
                    //aqui
                    
                    if($i == count($_SESSION["id_prod_validos"]) - 1){
                        $info_produto[4] += $_SESSION['valor_frete'];
                    }
                    $this->comprar(
                    $_SESSION["nome"],
                    $_SESSION["email_comprador"],
                    $_SESSION["cpf_comprador"],
                    $_SESSION["cep_valor"],
                    $_SESSION["rua_valor"],
                    $_SESSION["estado_valor"],
                    $_SESSION["numero_valor"],
                    $_SESSION["complemento_valor"],
                    $_SESSION["bairro_valor"],
                    $_SESSION["logradouro_valor"],
                    $_SESSION["municipio_valor"],
                    $_SESSION["pagamento"],
                    $info_produto[0],
                    $info_produto[3],
                    $_SESSION["id"],
                    $info_produto[4],
                    $_SESSION["dataNasc_comprador"],
                    $codigo_compra);
                }
            }
            else{

                $_SESSION['preco_total'] = 0;//


                $codigo_compra = bin2hex(random_bytes(10));
                if($this->checar_existencia_codigo_compra($codigo_compra)){
                    while($this->checar_existencia_codigo_compra($codigo_compra)){
                        $codigo_compra = bin2hex(random_bytes(10));
                    }
                }

                $_SESSION['codigo_compra'] = $codigo_compra;

                $info_produto = $this->puxar_info_produto($_SESSION["Id_produto_atual"]);
                $this->comprar(
                $_SESSION["nome"],
                $_SESSION["email_comprador"],
                $_SESSION["cpf_comprador"],
                $_SESSION["cep_valor"],
                $_SESSION["rua_valor"],
                $_SESSION["estado_valor"],
                $_SESSION["numero_valor"],
                $_SESSION["complemento_valor"],
                $_SESSION["bairro_valor"],
                $_SESSION["logradouro_valor"],
                $_SESSION["municipio_valor"],
                $_SESSION["pagamento"],
                $info_produto[0],
                $info_produto[3],
                $_SESSION["id"],
                $info_produto[4],
                $_SESSION["dataNasc_comprador"],
                $codigo_compra);

                $_SESSION['preco_total'] = $info_produto[4];//aqui
            }
        }
    }    
}
$compra = new compra_finalizar;
/*
DADOS DE PAGAMENTO:
$_SESSION["pagamento"]                  //inserir na tabela vendas

$_SESSION["numero"] 
$_SESSION["nomeTitular"] 
$_SESSION["dataVenc"] 
$_SESSION["cvv"]


DADOS CLIENTE:
$_SESSION["nome"]                       //inserir na tabela vendas
$_SESSION["email_comprador"]            //inserir na tabela vendas
$_SESSION["cpf_comprador"]              //inserir na tabela vendas
$_SESSION["dataNasc_comprador"]         //inserir na tabela vendas

ENDEREÇO:
$_SESSION["cep_valor"]                  //inserir na tabela vendas
$_SESSION["rua_valor"]                  //inserir na tabela vendas
$_SESSION["estado_valor"]               //inserir na tabela vendas
$_SESSION["numero_valor"]               //inserir na tabela vendas
$_SESSION["complemento_valor"]          //inserir na tabela vendas
$_SESSION["bairro_valor"]               //inserir na tabela vendas
$_SESSION["logradouro_valor"]           //inserir na tabela vendas
$_SESSION["municipio_valor"]            //inserir na tabela vendas
*/

/*
SEQUENCIA DE INSERCAO:
0 $_SESSION["nome"]              
1 $_SESSION["email_comprador"]   
2 $_SESSION["cpf_comprador"]     
3 $_SESSION["cep_valor"]         
4 $_SESSION["rua_valor"]         
5 $_SESSION["estado_valor"]      
6 $_SESSION["numero_valor"]      
7 $_SESSION["complemento_valor"] 
8 $_SESSION["bairro_valor"]      
9 $_SESSION["logradouro_valor"]  
10 $_SESSION["municipio_valor"]  
11 $_SESSION["pagamento"]

12 $_SESSION["id_produto"]
13 $_SESSION["ID_vendedor"]
14 $_SESSION["valor"]


15 -> O último parametro e a data atual   usar o tipo de dado DATETIME. Este parametro não é necessário pois é inserido no comando SQL
*/
?>