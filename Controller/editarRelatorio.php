<?php

namespace Controller;

require_once '../Service/fachada.php';

use Service\Fachada;

class AtualizarRelatorioKm
{
    private $fachada;

    public function __construct()
    {
        $this->fachada = new Fachada();
    }

    public function atualizarRelatorio($dadosFormulario)
    {

        $facade =  $this->fachada->atualizarRelatorio($dadosFormulario);

        if ($facade) {
            echo 'Relatório atualizado com sucesso!';
        } else {
            echo "Erro ao atualiza o relatório. $facade.";
        }

        echo "<br><br><a href='../view/home.php'>Voltar ao formulário</a>";

       
    }
}

// Verificando se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Pegando os dados do formulário via POST
    $dadosFormulario = [
        'idKm' => $_POST['idKm'] ?? '',
        'data' => $_POST['data'] ?? '',
        'localUm' => $_POST['localUm'] ?? '',
        'localDois' => $_POST['localDois'] ?? '',
        'qtdKm' => $_POST['qtdKm'] ?? ''
    ];

    $cadastro = new AtualizarRelatorioKm();
    $cadastro->atualizarRelatorio($dadosFormulario);
}
