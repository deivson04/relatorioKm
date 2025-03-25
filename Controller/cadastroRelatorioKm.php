<?php

namespace Controller;

session_start();

require_once '../Service/fachada.php';
require_once '../Objeto/relatorioKm.php';

use Service\Fachada;
use Objeto\RelatorioDeKm;


$dadosFormulario = new RelatorioDeKm();

// Verificando se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dadosFormulario->setLocalUm($_POST['localUm'] ?? '');
    $dadosFormulario->setLocalDois($_POST['localDois'] ?? '');
    $dadosFormulario->setQtdKm($_POST['qtdKm'] ?? '');
    $dadosFormulario->setData($_POST['data'] ?? '');

    $idUsuario = $_SESSION['idUsuario'] ?? null;

    $dadosFormulario->setIdUsuario($idUsuario);
}

$fachada = new Fachada();
$cadastro = $fachada->inserirRelatorio($dadosFormulario);

if ($cadastro) {
    echo 'Relatório cadastrado com sucesso!';
} else {
    echo 'Erro ao cadastrar o relatório.';
}

echo "<br><br><a href='../view/home.php'>Voltar ao formulário</a>";
