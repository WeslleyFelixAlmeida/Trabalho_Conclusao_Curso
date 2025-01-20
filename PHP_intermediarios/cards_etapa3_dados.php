<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include_once 'model.php';

class cards_etapa3_dados extends Model
{
    public $info_produto = array();
    public $url_img;
    public function __construct()
    {
        $this->info_produto = $this->puxar_info_produto($_SESSION["Id_produto_atual"]);
        $this->url_img = $this->info_produto[5].".".$this->info_produto[7]; 

        $_SESSION["valor"] = $_SESSION["valor"] + $this->info_produto[4];
    }
}
?>