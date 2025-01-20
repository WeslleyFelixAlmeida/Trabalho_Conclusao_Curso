<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include_once 'model.php';
class compra_resumo_dados extends Model
{
    public $id_compra;
    public $ID_contaResponsavel;
    public $pagamento;
    public $dia_horario_compra;
    public $valor_total;

    public $ID_produto;
    public $nome_produto;
    public $img_produto;
    public $valor_produto;

    public function __construct()
    {
        $dados = $this->puxar_info_produto($_SESSION['produto_atual_resumo']);
        $this->ID_produto = $dados[0];
        $this->nome_produto = $dados[1];
        $this->img_produto = $dados[5].'.'.$dados[7];
        $this->valor_produto = $dados[4];
    }
}
?>