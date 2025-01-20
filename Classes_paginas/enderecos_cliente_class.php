<?php
class enderecos_cliente_class
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
    }
}
$enderecos_cliente_class = new enderecos_cliente_class();
?>