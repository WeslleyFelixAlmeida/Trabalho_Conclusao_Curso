<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
//Simulação de uma API de calculo de frete
// session_start();
include 'model.php';
class cep_calculo extends Model
{
    public function __construct(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cep_cliente = json_decode(file_get_contents('php://input'), true);
            $dadosAPI = json_decode($this->dadosAPIcep($cep_cliente['cep']));
            $dados_produto = $this->puxar_info_produto($_SESSION["Id_produto_atual"]);
            if(isset($dadosAPI->erro)){
                $_SESSION["valor"] = "R$".$dados_produto[4];
                echo json_encode(false);
            }
            else{
                $preco = $this->calcular_frete($dadosAPI->uf, $dadosAPI->logradouro, $dados_produto[4]);

                $_SESSION["valor"] = $preco[3]; 
                $_SESSION['valor_frete'] = $preco[1];
                echo json_encode($preco);
            }
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $novoConteudo = $_SESSION["valor"];
            echo json_encode(['novoConteudo' => $novoConteudo]);
        }
    }

    public function calcular_frete($uf, $endereco, $preco_produto){
        $dados = array();
        $dados[2] = $endereco;
        switch ($uf){
            case 'AC':
                $dados[0] = 5;
                $dados[1] = 37.48;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'AL':
                $dados[0] = 4;
                $dados[1] = 29.00;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'AP':
                $dados[0] = 6;
                $dados[1] = 38.56;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'AM':
                $dados[0] = 6;
                $dados[1] = 41.53;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'BA':
                $dados[0] = 4;
                $dados[1] = 24.83;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'CE':
                $dados[0] = 5;
                $dados[1] = 35.83;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'DF':
                $dados[0] = 2;
                $dados[1] = 13.80;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'ES':
                $dados[0] = 2;
                $dados[1] = 14.79;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'GO':
                $dados[0] = 2;
                $dados[1] = 12.69;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'MA':
                $dados[0] = 5;
                $dados[1] = 33.71;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'MT':
                $dados[0] = 3;
                $dados[1] = 17.26;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'MS':
                $dados[0] = 2;
                $dados[1] = 10.37;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'MG':
                $dados[0] = 2;
                $dados[1] = 11.00;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'PA':
                $dados[0] = 5;
                $dados[1] = 33.30;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'PB':
                $dados[0] = 5;
                $dados[1] = 32.57;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'PR':
                $dados[0] = 1;
                $dados[1] = 0.00;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'PE':
                $dados[0] = 4;
                $dados[1] = 31.34;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'PI':
                $dados[0] = 4;
                $dados[1] = 31.34;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'RJ':
                $dados[0] = 1;
                $dados[1] = 9.49;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'RN':
                $dados[0] = 5;
                $dados[1] = 34.26;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'RS':
                $dados[0] = 2;
                $dados[1] = 7.69;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'RO':
                $dados[0] = 4;
                $dados[1] = 32.35;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'RR':
                $dados[0] = 7;
                $dados[1] = 49.60;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'SC':
                $dados[0] = 1;
                $dados[1] = 3.17;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'SP':
                $dados[0] = 1;
                $dados[1] = 5.08;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'SE':
                $dados[0] = 4;
                $dados[1] = 26.85;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
            case 'TO':
                $dados[0] = 3;
                $dados[1] = 21.44;
                $dados[3] = "R$".number_format($preco_produto + $dados[1], 2, '.', '');
                return $dados;
                break;
        }
    }
}
$cep_calculo = new cep_calculo();
?>