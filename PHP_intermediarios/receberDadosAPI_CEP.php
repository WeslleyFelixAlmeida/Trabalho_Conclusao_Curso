<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include 'model.php';
class receberDadosAPI_CEP extends Model
{
    public function __construct()
    {
        $cep_cliente = json_decode(file_get_contents('php://input'), true);
        $dadosAPI = json_decode($this->dadosAPIcep($cep_cliente['cep']));
        if(isset($dadosAPI->erro)){
            echo json_encode(false);
        }
        else{
            echo json_encode($dadosAPI);
        }
    }
}

$receberDadosAPI_CEP = new receberDadosAPI_CEP();
?>