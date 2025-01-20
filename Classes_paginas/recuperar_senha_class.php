<?php
class recuperar_senha_class
{
    public $url_origem;
    public function __construct()
    {
        if(!isset($_GET['login']) || ($_GET['login'] !== 'vendedor' && $_GET['login'] !== 'cliente')){
            $this->url_origem = 'cliente';
        }
        else{
            $this->url_origem = $_GET['login'];
        }
    }
}
$recuperar_senha_class = new recuperar_senha_class();
?>