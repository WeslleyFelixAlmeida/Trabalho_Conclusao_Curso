<?php
    include_once "PHP_intermediarios/info_produto.php";
    class Produto_especifico extends informacoes_produto
    {
        public $id;
        public $infos_produto;
        public $url_img;

        public $perfil;
        public $login;
        public $url;

        public $permisao_conta;

        protected $tipoConta;
        public $URL_perfil;
        
        public function __construct()
        {
            // if (session_status() == PHP_SESSION_NONE){
            //     session_start();
            // }

            $this->id = $_GET['id'];
            $_SESSION["id_produto"] = $this->id;
            
            $this->infos_produto = $this->puxarInfos_produto($this->id);
            $_SESSION["ID_vendedor"] = $this->infos_produto[3];
            $_SESSION["valor"] = $this->infos_produto[4];
            $_SESSION["Id_produto_atual"] = $this->id;
            $this->url_img = $this->infos_produto[5].'.'.$this->infos_produto[7];

            $this->info_vendedor = $this->puxar_informacoes_vendedor($this->infos_produto[3]);
            

            $esconder = 'style="display: none;"';
            $mostrar = 'style="display: block;"';        
            if($_SESSION["id"] == ""){
                $this->perfil = $esconder;
                $this->login = $mostrar;
            }
            else{
                $this->perfil = $mostrar;
                $this->login = $esconder;
            }

            if($_SESSION["id"] == ""){
                $this->url = "login_cliente.php?pag=compra_etapa1";
            }   
            else{
                $this->url = "compra_etapa1";   
            }
            if(isset($_SESSION["tipoConta"])){
                if($_SESSION["tipoConta"] == "cliente"){
                   $this->permisao_conta = 'normal'; 
                }
                else if($_SESSION["tipoConta"] == "vendedor"){
                   $this->permisao_conta = 'none';
                }
                else if($_SESSION["tipoConta"] == "administrador"){
                    $this->permisao_conta = 'normal'; 
                }
                else{
                    $this->permisao_conta = 'normal'; 
                }
            }

            if(isset($_SESSION['tipoConta']) && $_SESSION['tipoConta'] != ''){
                $this->tipoConta = $_SESSION['tipoConta'];
                if($this->tipoConta == 'cliente'){
                    $this->URL_perfil = 'perfil.php';
                }
                else if($this->tipoConta == 'vendedor'){
                    $this->URL_perfil = 'perfil_vendedor.php';
                }
                else if($this->tipoConta == 'administrador'){
                    $this->URL_perfil = 'admin_perfil.php';
                }
                else{
                    $this->perfil = $esconder;
                    $this->login = $mostrar;
                }
            }
        }
    }
    $Produto_especifico = new Produto_especifico();
?>