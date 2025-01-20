<?php
class compra_etapa2_class
{
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

        else if($_SESSION["id_produto"] == "" || !$_SESSION['etapa1_verificacao'])
        {
            header('Location: index.php');
        }
    }
}

$compra_etapa2_class = new compra_etapa2_class();
// $_SESSION["id_produto"];
?>