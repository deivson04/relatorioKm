<?php

namespace Controller;

session_start();

require_once '../Service/fachada.php'; 
require_once '../Objeto/relatorioKm.php';

use Service\Fachada;
use Objeto\RelatorioDeKm;

// Verificando se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dadosFormulario = new RelatorioDeKm();
    
    $dadosFormulario->setData($_POST['data']) ?? '';
    $dadosFormulario->setDataFinal($_POST['dataFinal']) ?? '';
    $dadosFormulario->setIdUsuario($_SESSION['idUsuario']) ?? '';

}

$fachada = new Fachada();
$buscaData = $fachada->buscarData($dadosFormulario);

if (empty($buscaData)) {
    echo 'Não existir datas nesta consulta';
} else {
    foreach($buscaData as $dados){
        echo $dados['data'] . "<br>".
             $dados['localUm']. "<br>". 
             $dados['localDois']. "<br>".
             $dados['qtdKm'];
    }
}

echo "<br><br><a href='../view/gerarKm.php'>Voltar ao gerarKm</a>";
// echo '<pre>';
// var_dump($buscaData);
// die;

