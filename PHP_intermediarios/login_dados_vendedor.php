<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include "model.php";
// session_start();

class Login_Solicitacao_vendedor extends Model
{
    public function __construct(){
        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);

        $email = $dadosRecebidos["email"];
        $senha = $dadosRecebidos["senha"];

        $verificar_existencia = $this->login_vendedor($email, $senha);

        if($email == "" && $senha == ""){
            $_SESSION["id"] = "";
            $_SESSION["usuario"] = "";
            $_SESSION["email"] = "";
            $_SESSION["dataNasc"] = "";
            $_SESSION["telefone"] = "";
            $_SESSION["cpf"] = "";
            $_SESSION["cnpj"] = "";
            $_SESSION["senha"] = "";
            $_SESSION["tipoConta"] = "";
        }

        else if($verificar_existencia == true && $email != "" && $senha != ""){
            $SESSION["ID_usuario"] = $this->pegarID_vendedor($email);
            $informacoes = $this->puxar_informacoes_vendedor($SESSION["ID_usuario"]);

            list($ano, $mes, $dia) = explode("-", $informacoes[3]);
            $data_formatada = $dia . "/" . $mes . "/" . $ano;

            $_SESSION["id"] = $informacoes[0];
            $_SESSION["usuario"] = $informacoes[1];
            $_SESSION["email"] = $informacoes[2];
            $_SESSION["dataNasc"] = $data_formatada;
            $_SESSION["telefone"] = $informacoes[4];
            $_SESSION["cpf"] = $informacoes[5];
            $_SESSION["cnpj"] = $informacoes[6];
            $_SESSION["senha"] = $informacoes[7];
            $_SESSION["tipoConta"] = $informacoes[8];

            $_SESSION["dataNasc_padrao"] = $informacoes[3];
        }

        if ($dadosRecebidos) {
            $_SESSION['tipoConta'] = $dadosRecebidos['tipoConta'];
            header('Content-Type: application/json');
            echo json_encode($verificar_existencia);
        }
    }
}
$Login_Solicitacao_vendedor = new Login_Solicitacao_vendedor();
?>