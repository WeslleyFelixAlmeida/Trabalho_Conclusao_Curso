<?php
class login_vendedor_class
{
    public $pagina;
    public function __construct()
    {
        // session_start();
        if($_SESSION["id"] != ""){
            header('Location: index.php');
        }
    }
}
$login_vendedor_class = new login_vendedor_class();
?>