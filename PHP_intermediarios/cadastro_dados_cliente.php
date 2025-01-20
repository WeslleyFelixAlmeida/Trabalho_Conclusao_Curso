<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include "model.php";
// session_start();
class Cadastro_Solicitacao extends Model
{
    public function __construct(){
        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);
       
        $usuario = $dadosRecebidos["usuario"];
        $email = $dadosRecebidos["email"];
        $dataNasc = $dadosRecebidos["dataNasc"];
        $telefone = $dadosRecebidos["telefone"];
        $cpf = $dadosRecebidos["cpf"];
        $senha = $dadosRecebidos["senha"];

        $confirmacaoJS = $dadosRecebidos["confirmacaoJS"];

        $verificar_existencia_conta = $this->verificar_existencia_conta($email, "clientes");
        
        if($verificar_existencia_conta == true){
            $this->inserirDadosCliente($usuario, $email, $dataNasc, $telefone, $cpf, $senha);
        }

        if ($dadosRecebidos) {
            header('Content-Type: application/json');
            echo json_encode($verificar_existencia_conta);//envia a resposta do banco de dados para o js
        }
    }
}
$Cadastro_Solicitacao = new Cadastro_Solicitacao();
?>