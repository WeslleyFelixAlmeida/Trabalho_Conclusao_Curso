<?php
include 'PHP_intermediarios/model.php';
class compra_resumo_class extends Model
{
    public $display;
    public function __construct()
    {
        // if (session_status() == PHP_SESSION_NONE){
        //     session_start();
        // }

        // $this->limitador_pagina();
    }
    
    public function limitador_pagina(){
        if($_SESSION["id"] == "" || $_SESSION["email"] == ""){
            header('Location: index.php');
        }

        else if($_SESSION["tipoConta"] == 'vendedor' || $_SESSION["tipoConta"] == 'administrador'){
            header('Location: index.php');
        }

        else if($_SESSION["id_produto"] == "" || !$_SESSION['etapa1_verificacao'] || !$_SESSION['etapa2_verificacao'] || !$_SESSION['etapa3_verificacao'])
        {
            header('Location: index.php');
        }
    }

    private function resetar_limitadores(){
        $_SESSION['etapa1_verificacao'] = false;
        $_SESSION['etapa2_verificacao'] = false;
        $_SESSION['etapa3_verificacao'] = false;
        $_SESSION["id_prod_validos"] = "";
        $_SESSION["id_prod_validos"] = array();
        $_SESSION["valor"] = 0;
        $_SESSION["Id_produto_atual"] = "";
        $_SESSION['compra_carrinho'] = "";
        $_SESSION['codigo_compra'] = "";
        $_SESSION['valor_frete'] = 0;
        $_SESSION['preco_total'] = 0;

        for($i = 0; $i < count($_SESSION['produtos_adicionados']); $i++){
            $_SESSION['produtos_adicionados'][$i] = null;
        }
    }

    public function apresentar_boleto(){
        if(isset($_SESSION["pagamento"]) && $_SESSION["pagamento"] === 'boleto'){
            $this->display = 'normal';
        }
        else{
            $this->display = 'none';
        }
    }

    public function apresentar_produtos(){
        if($_SESSION['compra_carrinho'] == true){
            $dados_compra = $this->puxar_infos_compra_atual($_SESSION['codigo_compra']);
            for($i = 0; $i < count($dados_compra); $i++){
                $_SESSION['produto_atual_resumo'] = $dados_compra[$i]['ID_produto'];

                include 'PHP_intermediarios/card_compra_resumo.php';
                if($i == count($dados_compra) - 1){
                    $this->resetar_limitadores();
                }
            }
        }
        else{
            $dados_compra = $this->puxar_infos_compra_atual($_SESSION['codigo_compra']);
            for($i = 0; $i < count($dados_compra); $i++){
                $_SESSION['produto_atual_resumo'] = $dados_compra[$i]['ID_produto'];
                
                include 'PHP_intermediarios/card_compra_resumo.php';
            }
        }
    }
}

$compra_resumo_class = new compra_resumo_class();
$_SESSION["id_produto"];
?>