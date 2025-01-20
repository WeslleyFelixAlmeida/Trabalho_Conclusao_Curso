<?php
class login_cliente_class
{
    public $pagina;
    public function __construct()
    {
        // session_start();
        if($_SESSION["id"] != ""){
            header('Location: index.php');
        }
        
        if (isset($_GET['pag'])){
            $this->pagina = $_GET['pag'];
        }
        else{
            $this->pagina = 'index.php';
        }
    }
}
$login_cliente_class = new login_cliente_class();
?>