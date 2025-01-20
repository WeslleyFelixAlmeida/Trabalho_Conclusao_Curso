<?php
include 'PHP_intermediarios/dados_produtos_carrinho.php';

class Carrinho extends dados_produtos_carrinho
{
    public $perfil;
    public $login;
    protected $tipoConta;
    public $URL_perfil;
    public $status_login;
    
    public function __construct()
    {
        // session_start();

        if (!isset($_SESSION["id"])) {
            $_SESSION["id"] = "";
        }
        $esconder = 'style="display: none;"';
        $mostrar = 'style="display: block;"';

        if ($_SESSION["id"] == "") {
            $this->perfil = $esconder;
            $this->login = $mostrar;
        } else {
            $this->perfil = $mostrar;
            $this->login = $esconder;
        }

        if(isset($_SESSION['tipoConta']) && $_SESSION['tipoConta'] != ''){
            $this->tipoConta = $_SESSION['tipoConta'];
            if($this->tipoConta == 'cliente'){
                $this->URL_perfil = 'perfil.php';
            }
            else if($this->tipoConta == 'vendedor'){
                header('Location: index.php');
            }
            else if($this->tipoConta == 'administrador'){
                $this->URL_perfil = 'admin_perfil.php';
            }
            else{
                $this->perfil = $esconder;
                $this->login = $mostrar;
            }
        }

        $this->status_login();

        if(!isset($_SESSION['compra_carrinho'])){
            $_SESSION['compra_carrinho'];
        }
        else if($_SESSION['id'] != ""){ 
            $_SESSION['compra_carrinho'] = true;
        }
        else{
            $_SESSION['compra_carrinho'] = false;
        }
    }

    public function apresentar_produtos(){
        if(isset($_SESSION['produtos_adicionados']) && $_SESSION['produtos_adicionados'] != ""){
            for($i=0;$i < count($_SESSION['produtos_adicionados']); $i++){
                if($_SESSION['produtos_adicionados'][$i] != ""){

                    $_SESSION['produto_add_atual'] = $_SESSION['produtos_adicionados'][$i]; 

                    $_SESSION['produto_remover'] = $i;
                    include 'PHP_intermediarios/carrinho_cards.php';
                }
            } 

            if(!isset($_SESSION['preco_total'])){
                $_SESSION['preco_total'] = 0;
            }

            if(isset($_SESSION['preco_total']) && $_SESSION['preco_total'] != 0){
                $_SESSION['preco_total'] = 0;
                $this->calcular_preco();
            }
            
            else{
                $this->calcular_preco();
            }
        }
    }

    public function status_login(){
        if (!isset($_SESSION["id"])) {
            $_SESSION["id"] = "";
        }

        if($_SESSION["id"] != "" && $_SESSION["tipoConta"] == "cliente"){
            $this->status_login = true;
        }
        
        else{
            $this->status_login = false;
        }
    }
}
$Carrinho = new Carrinho();
?>