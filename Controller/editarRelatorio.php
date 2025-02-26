<?php

namespace Controller;

require_once '../Service/fachada.php';
require_once '../Objeto/relatorioKm.php';

use Service\Fachada;
use Objeto\RelatorioDeKm;

// Verificando se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dadosFormulario = new RelatorioDeKm();

    $dadosFormulario->setIdKm($_POST['idKm']) ?? '';
    $dadosFormulario->setLocalUm($_POST['localUm']) ?? '';
    $dadosFormulario->setLocalDois($_POST['localDois']) ?? '';
    $dadosFormulario->setQtdKm($_POST['qtdKm']) ?? '';
    $dadosFormulario->setData($_POST['data']) ?? '';
}
$fachada = new Fachada();
$atualizar = $fachada->inserirRelatorio($dadosFormulario);


if (isset($atualizar)) {
    echo 'Relatório atualizado com sucesso!';
} else {
    echo "Erro ao atualiza o relatório. $atualizar.";
}

echo "<br><br><a href='../view/home.php'>Voltar ao formulário</a>";
