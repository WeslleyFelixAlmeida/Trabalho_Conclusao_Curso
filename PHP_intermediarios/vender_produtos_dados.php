<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include "model.php"; 
// session_start();
class Vender_produtos_dados extends Model{
    public function __construct(){
        $resposta = [$_POST, $_FILES];

        $nome_produto = $_POST['nome_prod_novo'];
        $descricao_produto = $_POST['desc_produto'];
        $quantidade_produto = $_POST['QNTD_produto'];
        $preco_prod_int = $_POST['preco_int_parte'];
        $preco_prod_dec = $_POST['preco_dec_parte'];
        $unidade_medida = $_POST['escolha_volume'];
        $volume_produto = $_POST['volume_produto'];
        //Ajeitar as funcoes do model para acc o valor da quantidade em estoque e volume

        $preco_produto = $this->formatar_preco($preco_prod_int,$preco_prod_dec);
        $volume_final = $volume_produto.' '.$unidade_medida;

        $infos =[
                $nome_produto,
                $descricao_produto,
                $quantidade_produto,
                $preco_prod_int,
                $unidade_medida,
                $volume_produto 
                ];

        $temp = $_FILES['imagem_produto']['tmp_name'];
        $name = $_FILES['imagem_produto']['name'];

        $tipo_img = explode('/', $_FILES['imagem_produto']['type']);
        $extensao = end($tipo_img); 
        
        if(!$_FILES['imagem_produto']['name'] || !$infos[0] || !$infos[1] || !$infos[2] || !$infos[3] || !$infos[4] || !$infos[5]){
            echo json_encode(false);
        }
        else{
            $contabilizar_produtos = $this->contabilizarProdutosTotais();
            $id_produto = $contabilizar_produtos["QNTD_produtos"] + 1;
            
            $caminho_img = '../imagens/imagens_produtos/'.$id_produto.'.'.$extensao.'';
            if(move_uploaded_file($temp, $caminho_img)){
                echo json_encode(true);

                $this->adicionar_produto($nome_produto, $descricao_produto, $_SESSION["id"], $preco_produto, 'imagens_produtos/'.$id_produto.'', $volume_final, $extensao, $quantidade_produto);
            }
        }
    }
    
    public function formatar_preco($parte_int, $parte_dec){
        $preco_dec_parte = "";

        if($parte_dec == ''){
            $preco_dec_parte = '00';
        }

        else if(strlen($parte_dec) == 1){
            $preco_dec_parte = $parte_dec.'0';
        }

        else{
            $preco_dec_parte = $parte_dec;
        }

        return $parte_int.'.'.$preco_dec_parte;
    }
}
$Vender_produtos_dados = new Vender_produtos_dados();
?>