<?php
class compra_etapa1_class
{
    public $cep_fornecido = "";
    public function __construct()
    {
        // if (session_status() == PHP_SESSION_NONE){
        //     session_start();
        // }
        if(isset($_GET['cep'])){
            $this->cep_fornecido = $_GET['cep'];
        }
    
        $this->limitador_pagina();

        if(isset($_GET['carrinho'])){
            $this->limitar_carrinho();
        }
    }
    public function limitador_pagina(){
        if($_SESSION["id"] == "" || $_SESSION["email"] == "" || $_SESSION ["id_produto"] == ""){
            header('Location: index.php');
        }

        else if($_SESSION["tipoConta"] == 'vendedor' || $_SESSION["tipoConta"] == 'administrador'){
            header('Location: index.php');
        }

    }
    public function limitar_carrinho(){
        if($_GET['carrinho'] === 'not')
        {
            $_SESSION['compra_carrinho'] = false;
        }
        else if($_GET['carrinho'] === 'yes'){
            $_SESSION['compra_carrinho'] = true;

            $carrinho_vazio = array_filter($_SESSION['produtos_adicionados'], function($valor) {
                return !is_null($valor);
            });

            if (empty($carrinho_vazio)) {
                header("Location: carrinho.php?carrinhoVazio=true");
            }
        }
    }
}
$compra_etapa1_class = new compra_etapa1_class();

$_SESSION["id_produto"];
?>