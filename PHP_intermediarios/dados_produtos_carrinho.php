<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    include 'model.php';
    class dados_produtos_carrinho extends Model
    {
        public $informacoes_produto;
        public $img_produto;
        public function __construct()
        {   
            if(isset($_SESSION['produto_add_atual']) && $_SESSION['produto_add_atual'] != ""){
                $this->informacoes_produto = $this->puxar_info_produto($_SESSION['produto_add_atual']);
                
                $this->img_produto = $this->informacoes_produto[5].'.'.$this->informacoes_produto[7];
            }
            else{
                $this->informacoes_produto = ["", "", "", "", "", "", "", ""];
                $this->img_produto = "";
            }
        }

        public function calcular_preco(){
            if(isset($_SESSION['produtos_adicionados'])){
                for($i = 0; $i <= count($_SESSION['produtos_adicionados']) - 1; $i++){        
                    if($_SESSION['produtos_adicionados'][$i] != ""){
                        $dados_produto = $this->puxar_info_produto($_SESSION['produtos_adicionados'][$i]);
                        $_SESSION['preco_total'] += $dados_produto[4];
                    }    
                }
            }
        }
    }
?>