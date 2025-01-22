<?php

namespace Controller;

require_once '../Service/fachada.php';

use Service\Fachada;

class CadastroRelatorioKm
{
    private $fachada;

    public function __construct()
    {
        $this->fachada = new Fachada();
    }

    public function inserirRelatorio($dadosFormulario)
    {

        $facade =  $this->fachada->inserirRelatorio($dadosFormulario);

        if ($facade) {
            echo 'Relatório cadastrado com sucesso!';
        } else {
            echo "Erro ao cadastrar o relatório. $facade.";
        }

        echo "<br><br><a href='../index.php'>Voltar ao formulário</a>";

        return $facade;
    }

    public function buscarRelatorio()
    {
        return $this->fachada->buscarRelatorio();
    }
}

// Verificando se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Pegando os dados do formulário via POST
    $dadosFormulario = [
        'data' => $_POST['data'] ?? '',
        'localUm' => $_POST['localUm'] ?? '',
        'localDois' => $_POST['localDois'] ?? '',
        'qtdKm' => $_POST['qtdKm'] ?? ''
    ];

    $cadastro = new CadastroRelatorioKm();
    $cadastro->inserirRelatorio($dadosFormulario);
} 

