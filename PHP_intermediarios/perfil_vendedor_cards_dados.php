<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    include 'model.php';
    $_SESSION["produto_add_exibir"] = 0;

    class perfil_vendedor_cards_dados extends Model
    {
        public $dados_vendedor;

        public $nome_produto;
        public $desc_produto;
        public $preco_produto;
        public $img_produto;
        public $produto_atual_info = array();

        public function __construct()
        {
            $this->dados_vendedor = $this->puxar_dados_prod_adicionado($_SESSION['id']);

            if(count($this->dados_vendedor) > 0 && $this->dados_vendedor[0] != null){
                $this->produto_atual_info[0] = $this->dados_vendedor[$_SESSION["produto_add_exibir"]]['nome_produto'];

                $this->produto_atual_info[1] = $this->dados_vendedor[$_SESSION["produto_add_exibir"]]['descricao_produto'];

                $this->produto_atual_info[2] = $this->dados_vendedor[$_SESSION["produto_add_exibir"]]['preco_produto'];

                $this->produto_atual_info[3] = $this->dados_vendedor[$_SESSION["produto_add_exibir"]]['img_produto'];

                $this->produto_atual_info[4] = $this->dados_vendedor[$_SESSION["produto_add_exibir"]]['tipo_img'];  
            }
            else{
                $this->produto_atual_info[0] = "";
                $this->produto_atual_info[1] = "";
                $this->produto_atual_info[2] = "";
                $this->produto_atual_info[3] = "";
                $this->produto_atual_info[4] = "";
            }
        }
    }
?>