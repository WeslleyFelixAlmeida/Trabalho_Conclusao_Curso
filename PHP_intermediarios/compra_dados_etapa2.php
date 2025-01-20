<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
// session_start();
class compra_etapa2
{
    public function __construct(){
        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);
        $_SESSION["pagamento"] = $dadosRecebidos["pagamento"];
        if($_SESSION["pagamento"] == "boleto"){
            $_SESSION["img_pagamento"] = "boleto_logo.png";

            $_SESSION["cpf_comprador"] = $dadosRecebidos["cpf"];
            $_SESSION["nome"] = $dadosRecebidos["nome"];
            $_SESSION["dataNasc_comprador"] = $dadosRecebidos["dataNasc"];
            $_SESSION["email_comprador"] = $dadosRecebidos["email"];
        }

        else if($_SESSION["pagamento"] == "cartao"){
            $_SESSION["img_pagamento"] = "cartao_logo.png";  

            $_SESSION["nome"] = $_SESSION["usuario"];
            $_SESSION["email_comprador"] = $_SESSION["email"];
            $_SESSION["cpf_comprador"] = $_SESSION["cpf"];
            $_SESSION["dataNasc_comprador"] = $_SESSION["dataNasc_padrao"];

            $_SESSION["numero"] = $dadosRecebidos["numero"];
            $_SESSION["nomeTitular"] = $dadosRecebidos["nomeTitular"];
            $_SESSION["dataVenc"] = $dadosRecebidos["dataVenc"];
            $_SESSION["cvv"] = $dadosRecebidos["cvv"];
            
        }

        $_SESSION['etapa2_verificacao'] = true;
    }    
}
$compra = new compra_etapa2();
?>