<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include_once "model.php";
    
    $_SESSION['id_produto'] = 1;
    class informacoes_produto extends Model{

        public $info_produto;
        public $id;
        public $nome_produto;
        public $descricao_produto;
        public $id_vendedor_responsavel;
        public $preco_produto;
        public $img_produto;
        public $volume;
        public $tipo_img;
        public $qntd_disponivel;

        public $info_vendedor;
        public function __construct()
        {
            $this->info_produto = $this->puxar_info_produto($_SESSION['id_produto']);

            $this->id = $this->info_produto["0"];
            $this->nome_produto = $this->info_produto["1"];
            $this->descricao_produto = $this->info_produto["2"];
            $this->id_vendedor_responsavel = $this->info_produto["3"];
            $this->preco_produto = $this->info_produto["4"];
            $this->img_produto = $this->info_produto["5"];
            $this->volume = $this->info_produto["6"];
            $this->tipo_img = $this->info_produto["7"];
            $this->qntd_disponivel = $this->info_produto["8"];
        }

        public function puxarInfos_produto($id_produto){
            $puxar_infos = $this->puxar_info_produto($id_produto);
            $informacoes_produto = array();

            for($i=0; $i < 9; $i++){
                $informacoes_produto[$i] = $puxar_infos["$i"];
            }

            return $informacoes_produto;
        }
    }
?> 

