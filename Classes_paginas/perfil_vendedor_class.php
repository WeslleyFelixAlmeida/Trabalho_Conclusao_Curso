<?php
class perfil_vendedor_class
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

        else if($_SESSION["tipoConta"] == 'cliente'){
            header('Location: index.php');
        }

        else if($_SESSION["tipoConta"] == 'administrador'){
            header('Location: index.php');
        }
    }
}
$perfil_vendedor_class = new perfil_vendedor_class();
?>