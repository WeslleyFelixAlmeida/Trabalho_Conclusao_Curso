<?php
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }    
    include 'model.php';
    class carrinho_dados extends Model
    {
        public function __construct()
        {
            $this->receberInformacoes_js();
            $this->enviar_dados_js();
        }

        public function receberInformacoes_js(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $dadosRecebidos = json_decode(file_get_contents('php://input'), 
                true);

                if(isset($_SESSION['produtos_adicionados']) && $_SESSION['produtos_adicionados'] == ""){
                    $_SESSION['produtos_adicionados'] = array();
                }

                if($dadosRecebidos['acao'] == 'addProduto'){
                    $this->add_produtos_carrinho($dadosRecebidos['idProduto']);
                }

                else if($dadosRecebidos['acao'] == 'comprar'){
                    if($dadosRecebidos['produtos'] != ""){
                        $this->comprar_produtos($dadosRecebidos['produtos']);
                    }
                    else{
                        echo json_encode(false);
                    }
                }

                else if($dadosRecebidos['acao'] == 'remover'){
                    $_SESSION['produtos_adicionados'][$dadosRecebidos['prod_remover']] = "";
                    echo json_encode(true);
                }
            }
        }

        public function enviar_dados_js(){
            if ($_SERVER['REQUEST_METHOD'] === 'GET'){
                if(!isset($_SESSION['produtos_adicionados'])){
                    $_SESSION['produtos_adicionados'] = array();
                }

                else if(isset($_SESSION['produtos_adicionados']) && $_SESSION['produtos_adicionados'] == ""){
                    $_SESSION['produtos_adicionados'] = array();
                }
                echo json_encode($_SESSION['produtos_adicionados']);
            }
        }


        public function add_produtos_carrinho($add_produto){
            if(!isset($_SESSION['produtos_adicionados'])){
                $_SESSION['produtos_adicionados'] = array();
            }
            array_push($_SESSION['produtos_adicionados'], $add_produto);
            echo json_encode($add_produto);
        }

        public function comprar_produtos($produtos_comprar){
            echo json_encode($produtos_comprar);
            $_SESSION['compra_carrinho'] = true;
            $_SESSION["id_prod_validos"] = array();
            
            for($i = 0; $i < count($_SESSION['produtos_adicionados']); $i++){
                if($_SESSION['produtos_adicionados'][$i] != ""){
                    array_push($_SESSION["id_prod_validos"], $_SESSION['produtos_adicionados'][$i]);
                }
            }
        }
    }
    $carrinho_dados = new carrinho_dados();
?>