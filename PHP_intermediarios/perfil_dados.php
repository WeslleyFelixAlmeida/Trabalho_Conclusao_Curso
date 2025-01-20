<?php 
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
include "model.php";

$_SESSION["produto_exibir"] = 0;
class perfil_dados extends Model
{
    public $id_usuario;
    public $tipo_pagamento;
    public $dia_horario_compra;
    public $valor;
    public $id_produto;
    public $infos_produto = array();
    
    public function __construct()
    {
        $dados_compra = $this->puxar_dados_compra($_SESSION["id"]);
        if(count($dados_compra) > 0 && $dados_compra[0] != null){
            $linha = $dados_compra[$_SESSION["produto_exibir"]];
            $this->id_usuario = $linha["ID_contaResponsavel"];
            $this->tipo_pagamento = $linha["pagamento"];
            $this->dia_horario_compra = $linha["dia_horario_compra"];
            $this->valor = $linha["valor"];
            $this->id_produto = $linha["ID_produto"];
            $_SESSION["QTND_produtos"] = count($dados_compra);
            $this->puxar_informacao_produtos($this->id_produto);
        }
        else{
            $_SESSION["QTND_produtos"] = 0;
        }
    }
    public function puxar_informacao_produtos($id_produto){
        $this->infos_produto = $this->puxar_info_produto($id_produto);
        return $this->infos_produto;
    }
}
?>