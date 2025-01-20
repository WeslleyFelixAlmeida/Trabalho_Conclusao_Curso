<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
// session_start();
include 'model.php';
class compra_etapa1 extends Model
{
    public function __construct(){
        $_SESSION['etapa1_verificacao'] = true;
        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);

        $_SESSION["cep_valor"] = $dadosRecebidos["cep_valor"];
        $_SESSION["rua_valor"] = $dadosRecebidos["rua_valor"];
        $_SESSION["estado_valor"] = $dadosRecebidos["estado_valor"];
        $_SESSION["numero_valor"] = $dadosRecebidos["numero_valor"];
        $_SESSION["complemento_valor"] = $dadosRecebidos["complemento_valor"];        
        $_SESSION["bairro_valor"] = $dadosRecebidos["bairro_valor"];
        $_SESSION["logradouro_valor"] = $dadosRecebidos["logradouro_valor"];
        $_SESSION["municipio_valor"] = $dadosRecebidos["municipio_valor"];

        $_SESSION["endereco_completo"] = "".$_SESSION["rua_valor"]." - ".$_SESSION["bairro_valor"]."(".$_SESSION["estado_valor"].")"." N°: ".$_SESSION["numero_valor"]."";
    }    
}
$compra = new compra_etapa1();
?>