<?php

namespace Controller;
// var_dump($_GET);
// die;
require_once '../Service/fachada.php';
require_once '../Objeto/relatorioKm.php';

use Service\Fachada;
use Objeto\RelatorioDeKm;

$dadosFormulario = new RelatorioDeKm();
$dadosFormulario->setIdKm($_GET['idKm']);

$delete = new DeleteRelatorioKm();
$delete->deleteRelatorio($dadosFormulario);

class DeleteRelatorioKm
{
    private $fachada;

    public function __construct()
    {
        $this->fachada = new Fachada();
    }

    public function deleteRelatorio($dadosFormulario)
    {
        $facade =  $this->fachada->deleteRelatorio($dadosFormulario);

        if ($facade) {
            echo 'Relatório excluido com sucesso!';
        } else {
            echo "Erro ao excluir o relatório. $facade.";
        }

        echo "<br><br><a href='../index.php'>Voltar ao formulário</a>";

        return $facade;
    }
}    