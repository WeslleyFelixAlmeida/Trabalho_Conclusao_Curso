<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include "model.php";
// session_start();
class privacidade_dados extends Model
{
    public function __construct()
    {
        $id_usuario = $_SESSION["id"];
        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);
        $novo_usuario = $dadosRecebidos["usuario"];
        $this->alterar_usuario($novo_usuario, $id_usuario);
        $_SESSION["testar"] = $dadosRecebidos["usuario"];
        $_SESSION["usuario"] = $novo_usuario;
    }
}
$privacidade_dados = new privacidade_dados();
?>