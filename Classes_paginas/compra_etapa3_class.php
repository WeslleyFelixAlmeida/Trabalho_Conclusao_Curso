<?php

include_once "PHP_intermediarios/info_produto.php";
class compra_etapa3_class extends informacoes_produto
{
    // public $infos_produto;
    public $url_img;
    public function __construct()
    {
        // if (session_status() == PHP_SESSION_NONE){
        //     session_start();
        // }

        $this->limitador_pagina();

    }
    public function limitador_pagina(){
        if($_SESSION["id"] == "" || $_SESSION["email"] == ""){
            header('Location: index.php');
        }

        else if($_SESSION["tipoConta"] == 'vendedor' || $_SESSION["tipoConta"] == 'administrador'){
            header('Location: index.php');
        }

        else if($_SESSION["id_produto"] == "" || !$_SESSION['etapa1_verificacao'] || !$_SESSION['etapa2_verificacao'])
        {
            header('Location: index.php');
        }
    }

    public function apresentar_produtos(){
        $_SESSION["valor"] = 0;
        if(isset($_SESSION['compra_carrinho']) && $_SESSION['compra_carrinho'] == true){
            for($i = 0; $i < count($_SESSION["id_prod_validos"]); $i++){
                $_SESSION["Id_produto_atual"] = $_SESSION["id_prod_validos"][$i];
                include 'PHP_intermediarios/cards_etapa3.php';
            }
        }
        
        else if($_SESSION['compra_carrinho'] === false){
            include 'PHP_intermediarios/cards_etapa3.php';
        }
    }
}

$compra_etapa3_class = new compra_etapa3_class();
$_SESSION["id_produto"];
?>