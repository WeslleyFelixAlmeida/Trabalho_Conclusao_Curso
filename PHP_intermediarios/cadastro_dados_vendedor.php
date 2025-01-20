<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include "model.php";
// session_start();
class Cadastro_Vendedor extends Model 
{
    public function __construct() {
        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);

        $usuario = $dadosRecebidos["usuario"];
        $email = $dadosRecebidos["email"];
        $dataNasc = $dadosRecebidos["dataNasc"];
        $telefone = $dadosRecebidos["telefone"];
        $cpf = $dadosRecebidos["cpf"];
        $cnpj = $dadosRecebidos["cnpj"];
        $senha = $dadosRecebidos["senha"];

        $confirmacaoJS = $dadosRecebidos["confirmacaoJS"];

        $verificar_existencia_conta = $this->verificar_existencia_conta($email, "vendedores");
        
        if($verificar_existencia_conta == true){
            $this->inserirDadosVendedor($usuario, $email, $dataNasc, $telefone, $cpf, $cnpj, $senha);
        }

        if ($dadosRecebidos) {
            header('Content-Type: application/json');
            echo json_encode($verificar_existencia_conta);
        }
    }
}
$Cadastro_Vendedor = new Cadastro_Vendedor();