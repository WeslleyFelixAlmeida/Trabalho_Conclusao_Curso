<?php        
    class Index
    {
        public $perfil;
        public $login;
        protected $tipoConta;
        public $URL_perfil;
        public function __construct()
        {
            // session_start();
            if(!isset($_SESSION["id"])){
                $_SESSION["id"] = "";   
            }

            if(!isset($_SESSION['preco_total'])){
                $_SESSION['preco_total'] = "";
            }

            $_SESSION['compra_carrinho'] = "";

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
    $Index = new Index();
?>